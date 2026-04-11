@extends('admin.layouts.admin')
@section('title', 'Edit Admin — Edge Mind Admin')

@section('content')
<div class="admin-header">
    <h1>Edit: {{ $admin->name }}</h1>
    <a href="{{ route('admin.admins.index') }}" class="btn btn-outline btn-sm">← BACK</a>
</div>

@if($errors->any())
<div class="admin-alert admin-alert-error">
    <ul style="margin: 0; padding-left: 1rem;">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
</div>
@endif

<form action="{{ route('admin.admins.update', $admin) }}" method="POST" enctype="multipart/form-data" class="admin-form" style="max-width: 600px;">
    @csrf @method('PUT')
    <div class="form-group">
        <label class="input-label">Name</label>
        <input type="text" name="name" class="input-edge" value="{{ old('name', $admin->name) }}" required>
    </div>
    <div class="form-group">
        <label class="input-label">Email</label>
        <input type="email" name="email" class="input-edge" value="{{ old('email', $admin->email) }}" required>
    </div>
    <div class="form-group">
        <label class="input-label">New Password <span style="color: var(--em-slate); font-weight: 400;">(leave blank to keep current)</span></label>
        <input type="password" name="password" class="input-edge">
    </div>
    <div class="form-group">
        <label class="input-label">Confirm Password</label>
        <input type="password" name="password_confirmation" class="input-edge">
    </div>
    <div class="form-group">
        <label class="input-label">Profile Photo</label>
        @if($admin->profile_photo_path)
            <div style="margin-bottom: 0.75rem;">
                <img src="{{ asset('storage/' . $admin->profile_photo_path) }}" style="height: 60px; border-radius: 2px;">
            </div>
        @endif
        <input type="file" name="profile_photo" class="input-edge" accept="image/*" style="padding: 0.5rem;">
    </div>
    <button type="submit" class="btn btn-primary">UPDATE ADMIN</button>
</form>
@endsection
