<div x-data="{ hover: false}" {{ $attributes->merge([ 'class' => ' block relative ']) }} >
    <div 
        x-on:mouseover="hover = true" 
        x-on:mouseout="hover = false"
        class="cursor-pointer flex justify-end w-8 h-8" @click="showModal= true ">
        <x-vui::icons.help class=" lg:mt-1 mx-2" ></x-vui::icon.help>
        {{-- <img alt='help' class="w-8 h-8 lg:mt-1 mx-2" src="{{ asset('icons/help.svg') }}" /> --}}
    </div>

    <div x-show="hover" class="absolute right-8 top-8 w-60 transition-all border-2 border-primary-purple-light duration-150 ease-in-out filter drop-shadow bg-white overflow-auto rounded-xl py-4 px-4 z-20 font-light" style="display: none;"> 
        {{ $slot }}
    </div>
    
</div>
