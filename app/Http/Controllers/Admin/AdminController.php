<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Http\Requests\Admin\AdminRequest;
use App\Helpers\ActivityLogger;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::latest()->paginate(10);
        return view('admin.admins.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.admins.create');
    }

    public function store(AdminRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('admins', 'public');
            $data['profile_photo_path'] = $path;
        }

        $admin = Admin::create($data);
        ActivityLogger::log('created', "Added new admin: {$admin->name}", $admin);

        return redirect()->route('admin.admins.index')->with('success', 'Admin created successfully.');
    }

    public function edit(Admin $admin)
    {
        return view('admin.admins.edit', compact('admin'));
    }

    public function update(AdminRequest $request, Admin $admin)
    {
        $data = $request->validated();

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        if ($request->hasFile('profile_photo')) {
            if ($admin->profile_photo_path && Storage::disk('public')->exists($admin->profile_photo_path)) {
                Storage::disk('public')->delete($admin->profile_photo_path);
            }
            $path = $request->file('profile_photo')->store('admins', 'public');
            $data['profile_photo_path'] = $path;
        }

        $admin->update($data);
        ActivityLogger::log('updated', "Updated admin: {$admin->name}", $admin);

        return redirect()->route('admin.admins.index')->with('success', 'Admin updated successfully.');
    }

    public function destroy(Admin $admin)
    {
        // Cannot delete self
        if ($admin->id === Auth::guard('admin')->id()) {
            return redirect()->route('admin.admins.index')->with('error', 'You cannot delete your own account.');
        }

        $name = $admin->name;

        if ($admin->profile_photo_path && Storage::disk('public')->exists($admin->profile_photo_path)) {
            Storage::disk('public')->delete($admin->profile_photo_path);
        }

        $admin->delete();
        ActivityLogger::log('deleted', "Deleted admin: {$name}", null);

        return redirect()->route('admin.admins.index')->with('delete', 'Admin deleted successfully.');
    }
}
