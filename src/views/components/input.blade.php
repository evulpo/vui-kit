@props([
    'size' => 'sm', 'md', 'lg',
    'type' => 'text', 'email', 'tel', 'password', 'date', 'color',
    'placeholder' => ''
])

<div class="min-w-1/4 my-4 mr-2">
    <input 
    {{ $attributes->class(['input rounded-lg input-'
        //. $size 
    ])->merge(['type' => $type]) }}
    {{-- type='' --}}
    class="p-2 rounded-lg min-w-full" placeholder="{{ $placeholder }} input {{ $type }} "
    >
</div>



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