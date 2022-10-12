<div>
    <button 
    {{-- {{ $attributes->class(['bn bn-'.$size.' bn-'.$color])->merge(['type' => 'button']) }} --}}
    >
        button from vui-kit/resources/views  
        {{ $slot }}
    </button>
</div>



{{-- For reference from evulpo repo --}}
{{-- 
@props(['disabled' => false])

<button {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-2 lg:px-4 py-2 lg:py-3 bg-primary-purple border-2 border-primary-purple rounded-md text-white hover:bg-primary-purple-light active:bg-primary-purple-light hover:text-primary-purple active:text-primary-purple focus:outline-none disabled:opacity-50 fox-transition text-sm lg:text-base font-medium ']) }}>
    {{ $slot }}
</button>
--}}
