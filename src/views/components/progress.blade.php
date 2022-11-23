

<div class="w-full bg-grey-200 rounded-full ">
    <div class="bg-iris-600 text-xs font-medium text-white text-center p-0.5 leading-none rounded-l-full py-2" style="width: 25%"> 25%</div>
</div>

<div class="hidden">

    <p class="text-iris-500 text-sm flex justify-between">
        {{-- {{$sd["name"]}}  --}}
        name
        <span class="text-black text-sm">
            {{-- {{ isset($sd["progress"]) ? $sd["progress"].'%' : '0%' }}  --}}
            prog
        </span>
    </p>
    <div class="overflow-hidden h-2 my-auto text-lg w-full lg:text-xl flex rounded bg-iris-100 col-span-8">
        <div 
            style="width: 75%" 
            {{-- style="width: {{ $sd['progress'] }}%"  --}}
            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center rounded bg-iris-500">
        </div>
    </div>


</div>