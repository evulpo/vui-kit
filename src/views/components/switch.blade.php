@props([
    'name' => '',
    'value' => '',
    // 'selected' => '', 
    'disabled' => false, 

])

<div {{ $attributes->class([''])->merge(['type' => '']) }}>
    
    <div class="relative inline-block min-w-10 w-10 mr-2 align-middle select-none transition duration-200 ease-in">
        <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-2 p-2 appearance-none cursor-pointer"/>
        <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-iris-100 cursor-pointer"></label>
    </div>
    <label for="toggle" class="text-xs text-iris-700">Switch me.</label>

</div>
