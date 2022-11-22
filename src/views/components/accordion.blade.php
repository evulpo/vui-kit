@props([
    'dynamic' => false,
    'faqs' => 'test', 'test2',
    'index' => 1,
])

<div {{ $attributes }} x-data="{ show:true }" >

    @if ($dynamic)

        <template x-for="(faq, index) in faqs" :key="`faq-{$index}`">
            <div class="border-b last:border-b-0 border-font">
                <h3
                    class="w-full font-medium text-font text-lg py-6 flex justify-between items-center hover:text-iris-500 dark:text-iris-100 dark:hover:text-iris-500  fox-transition cursor-pointer"
                    @click="faq_selected !== index ? faq_selected = index : faq_selected = null"
                >
                    <div x-text="faq.question"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 transform transition-all delay-100 duration-300" x-bind:class="faq_selected === index ? 'rotate-0' : 'rotate-45' " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </h3>
                <div class="relative overflow-hidden transition-all max-h-0 duration-500"
                    x-bind:style="faq_selected === index ? `max-height:  ${ $el.scrollHeight }px` : ``">
                    <p
                        class="text-base text-font dark:text-iris-100 font-light leading-relaxed pb-6"
                        x-html="faq.answer"
                    ></p>
                </div>
            </div>
        </template>

    @else

        <template 
            {{-- x-for="(faq, index) in faqs" :key="`faq-{$index}`" --}}
            x-if="show"
        >

            <div class="border-b last:border-b-0 border-font hover:text-iris-500" x-data="{opened: false}"">
                <h3
                    class="w-full font-medium text-font hover:text-iris-500 dark:text-iris-100 dark:hover:text-iris-500 text-lg py-6 flex justify-between items-center fox-transition cursor-pointer"
                    {{-- @click="faq_selected !== index ? faq_selected = index : faq_selected = null" --}}
                    @click="opened = ! opened"
                >
                    <div 
                    {{-- x-text="faq.question" --}}
                    >Why a static question accordion?</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 transform transition-all delay-100 duration-300" x-bind:class="opened == true ? 'rotate-0' : 'rotate-45' " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </h3>
                <div class="relative overflow-hidden transition-all max-h-0 duration-500"
                    {{-- x-if="opened" --}}
                    x-bind:style="opened == true ? `max-height:  ${ $el.scrollHeight }px` : ``"
                >
                    <p
                        class="text-base text-font dark:text-iris-100 font-light leading-relaxed pb-6"
                        {{-- x-html="faq.answer" --}}
                    >Because we need to test static answer content that will be used dynamically like it is the case with FAQ list.</p>
                </div>
            </div>

        </template>

    @endif

</div>


