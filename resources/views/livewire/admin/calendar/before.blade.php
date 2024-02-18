<div class="p-4 flex justify-between">
    <h2 class="text-4xl">{{ $this->startsAt->format('Y M') }} </h2>
    <div>
        <x-button wire:click="goToPreviousMonth"><</x-button>
        <x-button wire:click="goToCurrentMonth">Current</x-button>
        <x-button wire:click="goToNextMonth">></x-button>
    </div>
</div>