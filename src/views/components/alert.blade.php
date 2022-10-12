<div 
    class="m-1" 
    x-data="{open:true}" 
    {{-- x-on:btuialert.window="" --}}
    >

    <div x-show.transition="open" class=" alert 
        {{-- {{ $type }} --}}
    ">
        <div class="alert-content inline-flex">

            <span class="alert-icon ">
                <i class="
                    {{-- {{ $icon }} --}}
                "> icon </i>
            </span>

            <div class="alert-text px-2"></div>
                <p class=""> 
                    Alert text
                    {{-- {{ $text }} --}}
                </p>
            </div>

        </div>
        {{-- @if($closable) --}}
        <div class="alert-closebutton">

            <span x-on:click="open = false" class="text-4xl">&times</span>

        </div>
        {{-- @endif --}}
    </div>

</div>