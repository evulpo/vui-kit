@props([
    'color' => 'color',
])
<svg 
    {{ $attributes->merge(['type' => '', 'class' => ' fox-transition']) }} 
    viewBox="0 0 300 500" 
    fill="none" 
    xmlns="http://www.w3.org/2000/svg" 
>
    <path d="M31 379.5L0 122.5L58.5 115C60.5 114.5 64.25 113.5 65 112C65.75 110.5 66.5 108.5 66 105L56.5 25.5L265 0C304.962 327.188 277.19 95.0951 307 345.5L31 379.5Z" fill="{{$color}}"/>
    <path d="M41 34L0 106L49 99.5L41 34Z" fill="{{$color}}"/>
    <rect x="218" y="249.73" width="52.1761" height="153.391" transform="rotate(-53.1087 218 249.73)" fill="white"/>
    <circle cx="191" cy="185" r="79" fill="white"/>
    <circle cx="191" cy="186" r="66" fill="{{$color}}"/>
    <rect x="241.012" y="249.297" width="24.9424" height="113.202" transform="rotate(-53.1087 241.012 249.297)" fill="{{$color}}"/>
</svg>