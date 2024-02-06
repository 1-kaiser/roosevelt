<div>
    <button class="btn btn-primary" @click="$wire.set('modalCustomerCreate', true)">Enroll Now</button>

    <x-dialog-modal wire:model.live="modalCustomerCreate" submit="save">
        <x-slot name="title">
            Please input your information
        </x-slot>
    
        <x-slot name="content">
            <div class="grid grid-cols-2 gap-4 mt-5">
                <div class="mt-1">
                    <x-label for="form.full_name" value="Full Name" />
                    <x-input wire:model.lazy="form.full_name" id="form.full_name" name="form.full_name" type="text" class="mt-2 w-full text-black" require autocomplete="form.full_name" />
                    <x-input-error for="form.full_name" class="mt-1"/>
                </div>

                <div class="mt-1">
                    <x-label for="form.email" value="Email" />
                    <x-input wire:model.lazy="form.email" id="form.email" name="form.email" type="text" class="mt-2 w-full text-black" require autocomplete="form.email" />
                    <x-input-error for="form.email" class="mt-1"/>
                </div>

                <div class="mt-1">
                    <x-label for="form.age" value="Age" />
                    <x-input wire:model.lazy="form.age" id="form.age" name="form.age" type="number" class="mt-2 w-full text-black" require autocomplete="form.age" />
                    <x-input-error for="form.age" class="mt-1"/>
                </div>

                <div class="mt-1">
                    <x-label for="form.contact" value="Contact" />
                    <x-input wire:model.lazy="form.contact" id="form.contact" name="form.contact" type="number" class="mt-2 w-full text-black" require autocomplete="form.contact" />
                    <x-input-error for="form.contact" class="mt-1"/>
                </div>

                <div class="mt-1">
                    <x-label for="form.vehicle" value="Vehicle" />
                    <select wire:model.lazy="form.vehicle" name="form.vehicle" id="form.vehicle" class="text-sm mt-2">
                        <option value=""></option>
                        <option value="Volvo">Volvo</option>
                        <option value="McLaren">McLaren</option>
                    </select>
                    <x-input-error for="form.vehicle" class="mt-1"/>
                </div>

                <div class="mt-1">
                    <x-label for="form.transmission" value="Transmission" />
                    <select wire:model.lazy="form.transmission" name="form.transmission" id="form.transmission" class="text-sm mt-2">
                        <option value=""></option>
                        <option value="Manual">Manual</option>
                        <option value="Automatic">Automatic</option>
                    </select>
                    <x-input-error for="form.transmission" class="mt-1"/>
                </div>

                {{-- <div class="mt-1">
                    <x-label for="form.document" value="Valid ID" />
                    <x-input wire:model.lazy="form.document" id="form.document" name="form.document" type="file" class="mt-2 w-full text-black" require autocomplete="form.document" />
                    <x-input-error for="form.document" class="mt-1"/>
                </div> --}}
            </div>
        </x-slot>
    
        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalCustomerCreate', false)">
                {{ __('Cancel') }}
            </x-secondary-button>
    
            <x-button class="ms-3">
                Enroll
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