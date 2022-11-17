@props([
    'imageSelected' => false,
    'avatar' => '1', '2', '3', '4', '5', '6',
    'srcIcon' => 'evulpo/svg/user-circle.svg',
    'size' => 'sm', 'md',
    // 'src' => '/public/evulpo/svg/user-circle.svg'
])

{{-- img src not working with SVG icon !! USE ASSET() instead of public path --}}
<div
    {{ $attributes->merge([ 'class' => 'h-16 w-16 my-10']) }}
>

    @if($imageSelected)
        <img {{ 
            $attributes->merge([ 'class' => 'border border-white dark:border-iris-700 rounded-full h-16 w-16 hover:opacity-50 fox-transition cursor-pointer']) }} 
            {{-- alt="{{ __('Schlaufux Avatar') }}"  --}}
            src="{{ asset( '/evulpo/svg/avatars/avatar_' . $avatar . '.svg' ) }}" 
            {{-- src="{{ $src }}" --}}
        />
        {{-- <img src="{{ asset( '/evulpo/svg/avatars/avatar_' . $avatar . '.svg' ) }}" alt=""> --}}

    @elseif(!$imageSelected)
        <svg type="" class="w-full h-full cursor-pointer stroke-primary-purple hover:opacity-50 fox-transition" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>        
    @endif
</div>

