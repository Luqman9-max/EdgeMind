@extends('admin.layouts.admin')
@section('title', 'Add Book — Edge Mind Admin')

@section('content')
<div class="admin-header">
    <h1>Add New Book</h1>
    <a href="{{ route('admin.books.index') }}" class="btn btn-outline btn-sm">← BACK</a>
</div>

<form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data" class="admin-form" style="max-width: 800px;">
    @csrf
    @include('admin.books._form')
    <button type="submit" class="btn btn-primary">CREATE BOOK</button>
</form>
@endsection
