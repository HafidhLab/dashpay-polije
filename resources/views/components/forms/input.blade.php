@props([
    'label' => "",
    'placeholder' => "",
    'required'  => false,
    'type' => 'text',
    'name' => "",
    'disabled' => false,
    'readonly' => false,
    'value' => null
])

<div class="col-md-6 mb-3">
    <div class="form-group">
        <label>{{ $label }}</label>
        <input class="form-control" id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" placeholder="{{ $placeholder }}" {{ $disabled ? 'disabled' : ''}} {{ $readonly ? 'readonly' : ''}} value="{{ old($name, $value) }}">
    </div>
    
</div>
