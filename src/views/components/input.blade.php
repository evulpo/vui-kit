@props([
    'size' => 'sm', 'md', 'lg',
    'type' => 'text', 'email', 'tel', 'password', 'date',
    'placeholder' => ''
])

<input 
    {{ $attributes->class(['input rounded-lg input-'
        //. $size 
    ])->merge(['type' => $type]) }}
    {{-- type='' --}}
    class="p-2 rounded-lg" placeholder="{{ $placeholder }} input {{ $type }}"
>


<div class="hidden">
    <div class="input-wrap 
    {{-- input-wrap-{{ $type }} --}}
    ">       
        <div class="w-full">
            <input {{ $attributes->class(['input rounded-lg' ])->merge(['type' => 'text']) }}>    
        </div>    
        {{-- @if($icon != false) --}}
        <div class="input-icon 
        {{-- input-{{ $size }} --}}
        ">
            <i class="
            {{-- {{ $icon }} --}}
            "></i>
        </div>
        {{-- @endif --}}
    </div>
</div>