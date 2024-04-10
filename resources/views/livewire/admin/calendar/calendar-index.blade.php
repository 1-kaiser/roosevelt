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

    <footer class="fixed left-0 bottom-0 w-full">
        <div class="max-w-full sm:px-6 lg:px-1">
            <div class="p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="flex flex-col items-start justify-between border-t border-gray-100 md:flex-row md:items-center">
                <p class="mb-6 text-sm text-left text-gray-600 md:mb-0">© Copyright IS 3A Group 5. All Rights Reserved.</p>
                <div class="flex items-start justify-start space-x-6 md:items-center md:justify-center">
                    <a href="#_" class="text-sm text-gray-600 transition hover:text-primary">Terms</a>
                    <a href="#_" class="text-sm text-gray-600 transition hover:text-primary">Privacy</a>
                </div>
            </div>
            </div>
        </div>
    </footer>
</div>
