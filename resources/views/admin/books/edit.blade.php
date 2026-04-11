@extends('admin.layouts.admin')
@section('title', 'Edit Book — Edge Mind Admin')

@section('content')
<div class="admin-header">
    <h1>Edit: {{ $book->title }}</h1>
    <a href="{{ route('admin.books.index') }}" class="btn btn-outline btn-sm">← BACK</a>
</div>

<form action="{{ route('admin.books.update', $book) }}" method="POST" enctype="multipart/form-data" class="admin-form" style="max-width: 800px;">
    @csrf @method('PUT')
    @include('admin.books._form', ['book' => $book])
    <button type="submit" class="btn btn-primary">UPDATE BOOK</button>
</form>
@endsection
