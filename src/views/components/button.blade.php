<div class="py-4">
    <button 
        class="inline-flex items-center px-2 lg:px-4 py-2 lg:py-3 border-2 rounded-md border-iris-500 text-iris-500 hover:bg-iris-500 hover:text-white active:bg-iris-600 active:text-white focus:outline-none disabled:opacity-50 fox-transition text-sm lg:text-base font-medium"
        {{-- id= --}}
        {{-- class= --}}
        {{-- aria-label --}}
        {{-- variant= --}}
        {{-- href/link= --}}
        {{-- color= --}}
        {{-- size= --}}
        {{-- startIcon= --}}
        {{-- endIcon= --}}
        {{-- state?= --}}

        {{-- {{ $attributes->class(['btn btn-'.$size.' btn-'.$color])->merge(['type' => 'button']) }} --}}
    >
        button src/views/components       
        {{ $slot }}
    </button>
</div>