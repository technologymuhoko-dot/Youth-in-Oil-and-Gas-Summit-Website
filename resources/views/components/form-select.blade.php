@props([
    'label',
    'name',
    'options' => [],
    'required' => false,
    'selected' => null,
    'grid' => 'col-lg-6 col-md-6 mb-3',
    'placeholder' => 'Select an option',
])

<div class="{{ $grid }}">
    <div class="form-title">
        <h6>{{ $label }}{{ $required ? '*' : '' }}</h6>
    </div>
    <div class="form-box up">
        <select name="{{ $name }}" id="{{ $name }}" {{ $required ? 'required' : '' }}
            {{ $attributes->merge(['class' => '']) }}
            style="width: 100%; padding: 15px; border: 1px solid #ddd; background-color: white; border-radius: 4px; appearance: auto;">

            {{-- Improved Placeholder Logic --}}
            <option value="" disabled {{ !old($name, $selected) ? 'selected' : '' }}>
                {{ $placeholder }}
            </option>

            @foreach ($options as $key => $value)
                @php
                    $optionValue = is_int($key) ? $value : $key;
                    $optionText = $value;
                @endphp
                <option value="{{ $optionValue }}" {{-- Standardizing comparison for strings/integers --}}
                    {{ (string) old($name, $selected) === (string) $optionValue ? 'selected' : '' }}>
                    {{ $optionText }}
                </option>
            @endforeach
        </select>
    </div>
    @error($name)
        <span class="text-danger small" style="color: red;">{{ $message }}</span>
    @enderror
</div>
