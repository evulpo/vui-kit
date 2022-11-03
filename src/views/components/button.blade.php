@props([
    'btn' => 'nav', 'act',
    'size' => 'sm', 'md', 'lg',
    'look' => '', 'primary', 'secondary', 'error', 'success', 'filled', 'outlined',
    // 'sm' => false,
    // 'md' => false,
    // 'lg' => false,
    'link' => '',
    '_blank' => false,
    'grey' => false,
    'darkGrey' => false,
    'disabled' => false,
])

<div class="my-4">
    
    @if( $btn == 'act' )
        {{-- Action on the current page --}}
        <button 

            {{-- class="inline-flex items-center px-2 lg:px-4 py-2 lg:py-3 border-2 rounded-md border-iris-500 text-iris-500 hover:bg-iris-500 hover:text-white active:bg-iris-600 active:text-white focus:outline-none disabled:opacity-50 fox-transition text-sm lg:text-base font-medium" --}}
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
            {{-- {{ $attributes->class(['btn btn-'.$size  --}}
            {{-- .'btn-'.$color --}}
            {{-- ])->merge(['type' => 'button']) }} --}}
            
            {{ $attributes->class([
                // 'px-6 py-2' => $md,
                // 'px-2 py-1 text-sm' => $sm,
                // 'px-10 py-3' => $lg,
                'text-blue-500 hover:text-blue-700' => $link,
                'bg-grey-200 hover:bg-grey-300' => $grey,
                'bg-grey-600 hover:bg-grey-800 text-white' => $darkGrey,
                'cursor-default' => $disabled,
                'cursor-pointer' => !$disabled,
                'btn-' .$size. ' btn-' .$look. ' rounded-md border-2 transition transition-all duration-300'])->merge(['type' => 'button' ]) 
            }} 
            @if(!$disabled)
                href="{{ $link }}"
            @endif
        >
            {{-- button src/views/components        --}}
            {{ $slot }}
        </button>

    @else

        {{-- Navigates to another view --}}
        <a 
        {{ $attributes->class([
            // 'px-6 py-2' => $md,
            // 'px-2 py-1 text-sm' => $sm,
            // 'px-10 py-3' => $lg,
            'text-blue-500 hover:text-blue-700' => $link,
            'border-grey-200 bg-grey-200 hover:bg-grey-300' => $grey,
            'border-grey-500 bg-grey-600 hover:bg-grey-800 text-white' => $darkGrey,
            'cursor-pointer' => !$disabled,
            'cursor-default' => $disabled,
            'btn-' .$size. ' btn-' .$look. ' rounded-md border-2 transition transition-all duration-300'])
        }} 
        @if(!$disabled)
            href="{{ $link }}"
        @endif
            {{-- border-iris-500 text-iris-500 hover:bg-iris-500 hover:text-white active:bg-iris-600 active:text-white --}}
        >
        {{ $slot }}
        </a>
    
    @endif

</div>
