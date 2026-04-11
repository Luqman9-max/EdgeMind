{{-- Shared book form fields --}}
@if($errors->any())
<div class="admin-alert admin-alert-error">
    <ul style="margin: 0; padding-left: 1rem;">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="form-row">
    <div class="form-group">
        <label class="input-label" for="title">Title</label>
        <input type="text" id="title" name="title" class="input-edge" value="{{ old('title', $book->title ?? '') }}" required>
    </div>
    <div class="form-group">
        <label class="input-label" for="slug">Slug</label>
        <input type="text" id="slug" name="slug" class="input-edge" value="{{ old('slug', $book->slug ?? '') }}" required>
    </div>
</div>

<div class="form-group">
    <label class="input-label" for="short_description">Short Description</label>
    <input type="text" id="short_description" name="short_description" class="input-edge" value="{{ old('short_description', $book->short_description ?? '') }}" placeholder="Brief synopsis for catalog cards (max 500 chars)">
</div>

<div class="form-group">
    <label class="input-label" for="description">Full Description</label>
    <textarea id="description" name="description" class="input-edge" rows="6" required>{{ old('description', $book->description ?? '') }}</textarea>
</div>

<div class="form-group">
    <label class="input-label" for="cover_image">Cover Image</label>
    @if(isset($book) && $book->cover_image)
        <div style="margin-bottom: 0.75rem;">
            <img src="{{ asset('storage/' . $book->cover_image) }}" style="height: 80px; border-radius: 2px;">
        </div>
    @endif
    <input type="file" id="cover_image" name="cover_image" class="input-edge" accept="image/*" style="padding: 0.5rem;">
</div>

<div class="form-row">
    <div class="form-group">
        <label class="input-label" for="author">Author</label>
        <input type="text" id="author" name="author" class="input-edge" value="{{ old('author', $book->author ?? '') }}">
    </div>
    <div class="form-group">
        <label class="input-label" for="year">Year</label>
        <input type="number" id="year" name="year" class="input-edge" value="{{ old('year', $book->year ?? '') }}" min="1900" max="{{ date('Y') + 1 }}">
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label class="input-label" for="category">Category</label>
        <input type="text" id="category" name="category" class="input-edge" value="{{ old('category', $book->category ?? '') }}" placeholder="e.g., Mindset, Leadership">
    </div>
    <div class="form-group">
        <label class="input-label" for="sort_order">Sort Order</label>
        <input type="number" id="sort_order" name="sort_order" class="input-edge" value="{{ old('sort_order', $book->sort_order ?? 0) }}" min="0">
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label class="input-label" for="gumroad_url">Gumroad URL</label>
        <input type="url" id="gumroad_url" name="gumroad_url" class="input-edge" value="{{ old('gumroad_url', $book->gumroad_url ?? '') }}" placeholder="https://...">
    </div>
    <div class="form-group">
        <label class="input-label" for="price">Price ($)</label>
        <input type="number" id="price" name="price" class="input-edge" value="{{ old('price', $book->price ?? '') }}" step="0.01" min="0">
    </div>
</div>

<div style="display: flex; gap: 2rem; margin-bottom: 2rem; padding: 1.5rem; background: var(--em-gunmetal); border-radius: 2px;">
    <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
        <input type="hidden" name="is_published" value="0">
        <input type="checkbox" name="is_published" value="1" {{ old('is_published', $book->is_published ?? true) ? 'checked' : '' }} style="accent-color: var(--em-accent);">
        <span style="font-size: 0.85rem; color: var(--em-silver);">Published</span>
    </label>
    <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
        <input type="hidden" name="is_featured" value="0">
        <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $book->is_featured ?? false) ? 'checked' : '' }} style="accent-color: var(--em-accent);">
        <span style="font-size: 0.85rem; color: var(--em-silver);">Featured</span>
    </label>
    <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
        <input type="hidden" name="is_free" value="0">
        <input type="checkbox" name="is_free" value="1" {{ old('is_free', $book->is_free ?? false) ? 'checked' : '' }} style="accent-color: var(--em-accent);">
        <span style="font-size: 0.85rem; color: var(--em-silver);">Free</span>
    </label>
</div>
