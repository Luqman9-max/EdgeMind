@extends('admin.layouts.admin')
@section('title', 'Add Admin — Edge Mind Admin')

@section('content')
<div class="admin-header">
    <h1>Add New Admin</h1>
    <a href="{{ route('admin.admins.index') }}" class="btn btn-outline btn-sm">← BACK</a>
</div>

@if($errors->any())
<div class="admin-alert admin-alert-error">
    <ul style="margin: 0; padding-left: 1rem;">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
</div>
@endif

<form action="{{ route('admin.admins.store') }}" method="POST" enctype="multipart/form-data" class="admin-form" style="max-width: 600px;">
    @csrf
    <div class="form-group">
        <label class="input-label">Name</label>
        <input type="text" name="name" class="input-edge" value="{{ old('name') }}" required>
    </div>
    <div class="form-group">
        <label class="input-label">Email</label>
        <input type="email" name="email" class="input-edge" value="{{ old('email') }}" required>
    </div>
    <div class="form-group">
        <label class="input-label">Password</label>
        <input type="password" name="password" class="input-edge" required>
    </div>
    <div class="form-group">
        <label class="input-label">Confirm Password</label>
        <input type="password" name="password_confirmation" class="input-edge" required>
    </div>
    <div class="form-group">
        <label class="input-label">Profile Photo</label>
        <input type="file" name="profile_photo" class="input-edge" accept="image/*" style="padding: 0.5rem;">
    </div>
    <button type="submit" class="btn btn-primary">CREATE ADMIN</button>
</form>
@endsection
