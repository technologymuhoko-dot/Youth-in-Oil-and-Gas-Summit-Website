@props([
    'label',
    'name',
    'type' => 'text',
    'placeholder' => '',
    'required' => false,
    'value' => '',
    'grid' => 'col-lg-6 col-md-6',
])

<div class="{{ $grid }}">
    <div class="form-title">
        <h6>{{ $label }}{{ $required ? '*' : '' }}</h6>
    </div>
    <div class="form-box up">
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
            placeholder="{{ $placeholder }}" value="{{ old($name, $value) }}" {{ $required ? 'required' : '' }}
            {{ $attributes->merge(['class' => '']) }}>
    </div>
    @error($name)
        <span class="text-danger small" style="color: red;">{{ $message }}</span>
    @enderror
</div>
