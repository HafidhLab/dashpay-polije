@props([
    'label' => "",
    'placeholder' => "",
    'required'  => false,
    'type' => 'text',
    'name' => "",
    'disabled' => false,
    'readonly' => false
])

<div class="col-md-6 mb-3">
    <div class="form-group">
        <label>{{ $label }}</label>
        <input class="form-control" id="{{ $name }}" required={{ $type }} name="{{ $name }}" type="{{ $type }}" placeholder="{{ $placeholder }}" {{ $disabled ? 'disabled' : ''}} {{ $readonly ? 'readonly' : ''}} value="{{ $slot }}">
    </div>
    
</div>
