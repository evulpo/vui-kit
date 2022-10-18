<input 
    {{-- type='' --}}
    class="p-2" placeholder="input test"
>

<div>

    <div class="input-wrap input-wrap-{{ $type }}">       
        <div class="w-full">
            <input {{ $attributes->class(['input input-'.$size ])->merge(['type' => 'text']) }}>    
        </div>    
        @if($icon != false)
        <div class="input-icon input-{{ $size }}">
            <i class="{{ $icon }}"></i>
        </div>
        @endif
    </div>
    
</div>