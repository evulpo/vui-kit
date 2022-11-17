@props([
    // 'selected' => '', 
    'disabled' => false, 
    'required' => false,
    'multiple' => false
])

<div class="flex flex-col select-groups">

    <x-vui::label for="pet-select" class="dark:text-iris-100"></x-vui::label>

    <select name="pets" id="pet-select" class="rounded-lg">
        {{ $slot }}

    </select>    

</div>


