@props([
    'type' => 'text'
])

<div class="input input-text">
    <input type="{{ $type }}" name="{{ $name }}" id="input-{{ $id }}" value="{{ $value }}" placeholder=" ">
    <label for="input-{{ $id }}">{{ $placeholder }}</label>
</div>