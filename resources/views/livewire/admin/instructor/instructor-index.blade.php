<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Instructor') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <livewire:admin.instructor.instructor-create />
                <livewire:customer.customer-index /> --}}

                <x-button wire:click="test">Click Me</x-button>
            </div>
        </div>
    </div>
</div>