@props([
    'type' => '',
    'closable' => true
])

<div 
    class="m-1 flex space-x-2" 
    x-data="{ opened: true }" 
    {{-- x-on:vuialert.window="" --}}
    >

    <div 
        x-show="opened"
        {{-- x-transition --}}
        x-show.transition="opened" 
        class="alert group bg-iris-100 hover:bg-iris-600 px-4 py-2 rounded-md flex justify-center items-center cursor-pointer
        {{-- {{ $type }} --}}
        ">
        <div class="alert-content flex items-center justify-start">
            <span class="alert-icon ">
                <x-vui::icons.academic-cap class="min-h-full min-w-full h-8 w-8 stroke-iris-500 group-hover:stroke-white"/>
                <i class="hidden
                    {{-- {{ $icon }} --}}
                "> icon </i>
            </span>

            <div class="alert-text px-2"></div>
                <p class="text-middle text-iris-500 group-hover:text-white"> 
                    Alert text for you.
                    {{-- {{ $text }} --}}
                </p>
            </div>

            @if($closable)
                <div class="alert-closebutton p-2"
                x-if="opened == true">
                    <span 
                        x-on:click="opened = ! opened" 
                        x-bind:class="opened == true ? 'rotate-0' : 'rotate-45' "
                        class="text-4xl text-iris-500 group-hover:text-white ml-2">&times</span>
                </div>
            @endif

        </div>
    </div>

</div>
