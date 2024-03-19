<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Calendar') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="pr-4 flex justify-end">
                    <livewire:admin.calendar.event-create />
                </div>
                
                <livewire:admin.calendar.reservation-calendar 
                :day-click-enabled="false"
                :event-click-enabled="false"
                :drag-and-drop-enabled="false"
                before-calendar-view="livewire/admin/calendar/before" />
            </div>
        </div>
    </div>
</div>
