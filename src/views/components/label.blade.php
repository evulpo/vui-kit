@props([
    'forLabel' => '',
])
<label for="{{ $forLabel }}">{{ $slot }}</label>