<div>
    <button class="border-2 border-black p-2"
    {{-- {{ $attributes->class(['bn bn-'.$size.' bn-'.$color])->merge(['type' => 'button']) }} --}}
    >
        button from src/views/   
        {{ $slot }}
    </button>
 
</div>
