@props([
    'forLabel' => '',
])
<label for="{{ $forLabel }}" {{ $attributes->merge([ 'class' => 'text-sm lg:text-base font-semibold mt-6 hide text-iris-500' ]) }}>{{ $slot }}</label>