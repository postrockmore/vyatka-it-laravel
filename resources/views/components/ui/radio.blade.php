<div class="radio radio-variation-{{ $variation }}">
    <input
            type="radio"
            id="radio-{{ $id }}"
            name="{{ $name }}"
            value="{{ $value ?? $label }}"
            {{ $checked ? "checked" : "" }}
            hidden
    >
    <label for="radio-{{ $id }}">
        {{ $label }}
    </label>
</div>