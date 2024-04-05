<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Waitlist') }}
        </h2>
    </x-slot>

    <x-button @click="$wire.exportXLSX()">XLSX</x-button>
    <x-button @click="$wire.exportPDF()">PDF</x-button>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:admin.waitlist.waitlist-table />
            </div>
        </div>
    </div>
</div>
