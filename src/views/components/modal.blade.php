@props([
    'align' => true,
])

<div>
    {{-- <button></button> --}}

    <div x-data="{open: false}" x-cloak>
        {{-- Trigger Button --}}
        <div @click="open = true" class="w-full">
            {{-- {{ $trigger }} --}}
            <x-vui::button size="lg" btn="act" look="secondary">Trigger Me</x-vui::button>
        </div>

        <div x-show.transition="open" :class="open ? 'visible fixed z-50 top-0 bottom-0 left-0 right-0 flex' : 'invisible' " class=" bg-iris-100 bg-opacity-80 py-32 rounded-lg {{ $align ?? "justify-center" }}" x-cloak>

            <div x-show.transition="open"
                @click.away="open = false"
                class="grid grid-cols-1 w-screen h-screen/60 min-h-screen/60 max-w-3/5 min-w-96
                {{-- {{ 'bt-w-'.$width }} --}}
                 bg-white border-gray-200 shadow-lg overflow-y-auto mx-auto rounded-lg">
    
                <div class="w-full rounded-lg">
                    <div class="flex justify-end top-0 right-0 w-full">
                        {{-- Close Button --}}
                        <button @click="open = false" class="w-8- h-8 px-2 py-2 text-3xl text-gray-800 transition-all hover:text-4xl hover:text-red-500">&times;</button>
                    </div>
                    <div class="flex flex-col justify-center w-full px-8 py-2 bg-gray-100">
                        <div class="py-2 px-4 text-xl text-black">
                            {{-- {{ $title }} --}}
                        </div>
                        <div class="text-black">
                            {{ $slot }}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
