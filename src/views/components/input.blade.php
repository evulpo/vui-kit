@props([
    'size' => 'sm', 'md', 'lg',
    'type' => 'text', 'email', 'tel', 'password', 'date', 'time', 'url', 'color', 'range',
    'placeholder' => '',
    'label' => '',
    'name' => '',
    'icon' => false,
    'disabled' => false
])

<div 
    {{-- class="min-w-1/6 my-4 pr-4 flex flex-col justify-end"  --}}
    {{ $attributes->merge([ 'class' => 'my-4 pr-4 flex flex-col justify-end' ]) }}
    >
    <x-vui::label >{{ $label }}</x-vui::label>
    <input 
        class="h-14 p-2 rounded-lg vui-input input-{{ $type }}"
        {{ $attributes->merge(['type' => $type]) }}
        {{-- type='' --}}
        placeholder="{{ $placeholder }} input {{ $type }}"
    >
</div>
