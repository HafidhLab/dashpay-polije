<div class="input-group">
    <span class="input-group-text">
        <i class="{{ $icon }} ms-2 me-2"></i>
    </span>
    <input type="{{ $type ?? 'text' }}" wire:model="{{ $model }}" class="form-control @error($model) is-invalid @enderror">

    @error($model)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
