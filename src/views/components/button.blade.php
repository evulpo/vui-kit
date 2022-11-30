@props([
    'btn' => 'nav', 'act',
    'size' => 'lg', 'md', 'sm',
    'variant' => 'filled', 'outlined', 'text',
    'color' => 'iris', 'jade', 'red', 'grey', 
    'link' => '',
    'name' => '',
    'disabled' => false,
    '_blank' => false,
    'startIcon' => false,
    'endIcon' => false,
    'icon' => '',
    'loading' => false,
])

<div 
{{-- {{ $attributes->merge([ 'class' => ' ' ]) }}  --}}
>
    
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
                $variant == 'text' ? 'text-'.$color.'-500 dark:text-white' : '',
                $variant == 'filled' ? 'border-2 border-'.$color.'-500 bg-'.$color.'-500 text-white hover:text-'.$color.'-500 hover:bg-white ' : '',
                $variant == 'outlined' ? 'border-2 border-'.$color.' text-'.$color.'-500 hover:text-white bg-white hover:bg-'.$color.'-500' : '',
                'disabled cursor-default opacity-80' => $disabled,
                'cursor-pointer' => !$disabled,
                'text-blue-500 hover:text-blue-700 underline' => $link,
                'btn-' .$size.' btn-'.$variant.' btn-'.$color.' rounded-md transition transition-all duration-300'])
            }} 
            {{-- @if(!$disabled )
                href="{{ $link }}"
            @endif --}}
        >
            {{ $slot }}
        </button>

    @else

        {{-- Navigates to another view --}}
        <a 
            {{ $attributes->class([
                $variant == 'text' ? 'text-'.$color.'-500 dark:text-white' : '',
                $variant == 'filled' ? 'border-2 border-'.$color.'-500 bg-'.$color.'-500 text-white hover:text-'.$color.'-500 hover:bg-white ' : '',
                $variant == 'outlined' ? 'border-2 border-'.$color.' text-'.$color.'-500 hover:text-white bg-white hover:bg-'.$color.'-500' : '',
                'disabled cursor-default opacity-80' => $disabled,
                'cursor-pointer' => !$disabled,
                'text-blue-500 hover:text-blue-700 underline' => $link,
                'btn-' .$size.' btn-'.$variant.' btn-'.$color.' rounded-md transition transition-all duration-300'])
            }}  
            @if(!$disabled)
                href="{{ $link }}"
            @endif
        >
            {{ $slot }}
        </a>
    
    @endif

</div>
