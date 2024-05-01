<div id="Calendar" class="mt-20 ml-16">
    <strong class="text-3xl">Calendar</strong>
    <p>See what is available on your schedule</p>
</div>

<div class="mx-20 my-16">
    <livewire:admin.calendar.reservation-calendar 
                :day-click-enabled="false"
                :event-click-enabled="false"
                :drag-and-drop-enabled="false"
                before-calendar-view="livewire/admin/calendar/before" />
</div>