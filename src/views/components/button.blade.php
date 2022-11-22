@props([
    'btn' => 'nav', 'act',
    'size' => 'lg', 'md', 'sm',
    'variant' => 'filled', 'outlined', 'text',
    'color' => 'iris', 'jade', 'red', 'grey', 
    'look' => '', 'primary', 'secondary', 'error', 'success', 'filled', 'outlined',
    'link' => '',
    'name' => '',
    'disabled' => false,
    '_blank' => false,
    'startIcon' => false,
    'endIcon' => false,
    'icon' => '',
    'loading' => false,
    // 'sm' => false,
    // 'md' => false,
    // 'lg' => false,
    'grey' => false,
    'darkGrey' => false,
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
                'text-blue-500 hover:text-blue-700 underline' => $link,
                'text-'.$color.'-500 dark:text-white' => $variant == 'text',
                'border-2 border-'.$color.'-500 bg-'.$color.'-500 text-white hover:text-'.$color.'-500 hover:bg-white ' => $variant == 'filled',
                $variant == 'outlined' ? 'border-2 border-'.$color.' text-'.$color.'-500 hover:text-white bg-white hover:bg-'.$color.'-500' : '',
                // 'border-grey-200 bg-grey-200 hover:bg-grey-300' => $grey,
                // 'border-grey-500 bg-grey-600 hover:bg-grey-800 text-white' => $darkGrey,
                'cursor-pointer' => !$disabled,
                'disabled cursor-default bg-grey-200 hover:bg-grey-200 text-grey-300 hover:text-grey-300 opacity-80 border-grey-300' => $disabled,
                'btn-' .$size.' btn-'.$variant.' btn-'.$color.' rounded-md transition transition-all duration-300'])
            }} 
            {{-- @if(!$disabled )
                href="{{ $link }}"
            @endif --}}
        >
            {{-- button src/views/components --}}
            {{ $slot }}
        </button>

    @else

        {{-- Navigates to another view --}}
        <a 
        {{ $attributes->class([
            'text-blue-500 hover:text-blue-700 underline' => $link,
            'text-'.$color.'-500 dark:text-white' => $variant == 'text',
            'border-2 border-'.$color.'-500 bg-'.$color.'-500 text-white hover:text-'.$color.'-500 hover:bg-white ' => $variant == 'filled',
            $variant == 'outlined' ? 'border-2 border-'.$color.' text-'.$color.'-500 hover:text-white bg-white hover:bg-'.$color.'-500' : '',
            // 'border-grey-200 bg-grey-200 hover:bg-grey-300' => $grey,
            // 'border-grey-500 bg-grey-600 hover:bg-grey-800 text-white' => $darkGrey,
            'cursor-pointer' => !$disabled,
            'disabled cursor-default bg-grey-200 hover:bg-grey-200 text-grey-300 hover:text-grey-300 opacity-80 border-grey-300' => $disabled,
            'btn-' .$size.' btn-'.$variant.' btn-'.$color.' rounded-md transition transition-all duration-300'])
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
