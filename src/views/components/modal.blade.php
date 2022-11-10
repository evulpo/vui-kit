<div>
    {{-- <button></button> --}}

    <div x-data="{open: false}" x-cloak>
        {{-- trigger --}}
        <div @click="open = true" class="w-full">
            {{-- {{ $trigger }} --}}
            Trigger Button
        </div>

        <div x-show.transition="open" class="fixed z-50 top-0 bottom-0 left-0 right-0 flex bg-white bg-opacity-10 py-32 {{ $align ?? "justify-center" }}">

            <div x-show.transition="open"
                class="grid grid-cols-1 w-screen h-screen/60 min-h-screen/60 max-w-3/5 min-w-96
                {{-- {{ 'bt-w-'.$width }} --}}
                 bg-white border-gray-200 shadow-lg overflow-y-auto mx-auto">
    
                <div class="w-full">
                    <div class="flex justify-between px-4 py-2 bg-gray-100">
                        <div class="py-2 text-xl text-black">
                            {{-- {{ $title }} --}}
                        </div>
                        <div class="">
                            {{-- close button --}}
                            <button @click="open = false" class="w-8- h-8 px-1 py-1 text-3xl text-gray-800 transition-all hover:text-4xl hover:text-red-500">&times;</button>
                        </div>

                    </div>
                    <div class="text-black">
                        {{ $slot }}
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
