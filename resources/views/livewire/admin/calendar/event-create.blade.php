<div>
    <x-button @click="$wire.set('modalEventCreate', true)">Create Event</x-button>

    <x-dialog-modal wire:model.live="modalEventCreate" submit="save">
        <x-slot name="title">
            Event Information
        </x-slot>
    
        <x-slot name="content">
            <div class="grid grid-cols-2 gap-4 mt-5">
                <div class="mt-1">
                    <x-label for="form.title" value="Title" />
                    <x-input wire:model.lazy="form.title" id="form.title" name="form.title" type="text" class="mt-2 w-full text-black" require autocomplete="form.title" />
                    <x-input-error for="form.title" class="mt-1"/>
                </div>

                <div class="mt-1">
                    <x-label for="form.description" value="Description" />
                    <x-input wire:model.lazy="form.description" id="form.description" name="form.description" type="text" class="mt-2 w-full text-black" require autocomplete="form.description" />
                    <x-input-error for="form.description" class="mt-1"/>
                </div> 

                <div class="mt-1">
                    <x-label for="form.date" value="Date" />
                    <x-input wire:model.lazy="form.date" id="form.date" name="form.date" type="date" class="mt-2 w-full text-black" require autocomplete="form.date" />
                    <x-input-error for="form.date" class="mt-1"/>
                </div> 

                <div class="mt-1">
                    <x-label for="form.time" value="Time" />
                    <x-input wire:model.lazy="form.time" id="form.time" name="form.time" type="time" class="mt-2 w-full text-black" require autocomplete="form.time" />
                    <x-input-error for="form.time" class="mt-1"/>
                </div> 
            </div>
        </x-slot>
    
        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalEventCreate', false)">
                {{ __('Cancel') }}
            </x-secondary-button>
    
            <x-button class="ms-3">
                Create
            </x-button>
        </x-slot>
    </x-dialog-modal>

    <script>
        window.addEventListener("swal", (event) => {
            let data = event.detail;

            Swal.fire({
                title: data.title,
                text: data.text,
                icon: data.icon,
            });
        });
    </script>
</div>