@props([
    'title' => '',
    'name' => '',
    'placeholder' => '',
    'id' => 'summernote',
])

<div class="mb-3">
    <label class="form-label">{{ $title }}</label>

    <textarea id="{{ $id }}" name="{{ $name }}"
        class="form-control summernote @error($name) is-invalid @enderror" rows="6" placeholder="{{ $placeholder }}">{{ $slot }}</textarea>

    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
