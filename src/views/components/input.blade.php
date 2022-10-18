<input 
    {{-- type='' --}}
    class="p-2" placeholder="input test"
>

<div class="hidden">

    <div class="input-wrap 
    {{-- input-wrap-{{ $type }} --}}
    ">       
        <div class="w-full">
            <input {{ $attributes->class(['input' ])->merge(['type' => 'text']) }}>    
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