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
        class="h-14 p-2 rounded-lg input input-{{ $type }}"
        {{ $attributes->merge(['type' => $type]) }}
        {{-- type='' --}}
        placeholder="{{ $placeholder }} input {{ $type }}"
    >
</div>


<div class="hidden">
    <div class="input-wrap 
    {{-- input-wrap-{{ $type }} --}}
    ">       
        <div class="w-full">
            <input {{ $attributes->class(['rounded-lg input input-'
            //. $size 
            ])->merge(['type' => 'text']) }} placeholder="test"> 
        </div>    
        {{-- @if($icon != false) --}}
        <div class="input-icon 
        {{-- input-{{ $size }} --}}
        ">
            <i class="
            {{-- {{ $icon }} --}}
            ">
            </i>
        </div>
        {{-- @endif --}}
    </div>
</div>