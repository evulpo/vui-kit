{{-- Livewire Data Table ? --}}

<div class="align-middle min-w-full overflow-x-auto border border-secondary-grey overflow-hidden sm:rounded-lg p-4">
    <table {{ $attributes->merge(['class' => 'min-w-full divide-y divide-secondary-grey']) }}>
        <thead>
        <tr>
            thead
            {{-- {{ $head }} --}}
        </tr>
        </thead>

        <tbody class="bg-white divide-y divide-secondary-grey">
            tbody
            {{-- {{ $body }} --}}

        </tbody>
    </table>
</div>
