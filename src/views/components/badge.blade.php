@props([
    'icon' => false,
    'color' => 'purple', 
    'size' => 'sm', 'md',
    'count' => true,
    'countContent' => '',
])

<div {{ 
    $attributes->merge([ 'class' => ' py-4 px-3 bg-iris-100 rounded-md w-fit border-2 border-white hover:border-iris-500 hover:border-2 cursor-pointer']) }} >
    
    <div class="flex justify-center items-center text-iris-500">
        <p>{{$slot}}</p>
        @if ($count)
            <span class="px-2">({{ $countContent }})</span> 
        @endif
    </div>

</div>
