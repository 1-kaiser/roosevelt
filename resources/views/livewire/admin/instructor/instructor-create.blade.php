<div>
    <x-button @click="$wire.set('modalInstructorCreate', true)">Add Instructor</x-button>

    <x-dialog-modal wire:model.live="modalInstructorCreate" submit="save">
        <x-slot name="title">
            Instructor Information
        </x-slot>
    
        <x-slot name="content">

            <div class="mt-1 flex flex-col items-center">

                @if ($this->form->pic)
                <img src="{{ $this->form->pic->temporaryUrl() }}" alt="Preview" style="max-width: 100%; max-height: 200px;">
                @endif
                <x-label for="form.pic" value="Image" class="mt-2" />
                <x-input wire:model.lazy="form.pic" wire:model="$this->form->pic" id="form.pic" name="form.pic" type="file" class="mt-2 pl-24" require autocomplete="form.pic" />
                <x-input-error for="form.pic" class="mt-1"/>
            </div>
            
            <div class="grid grid-cols-2 gap-4 mt-5">

                <div class="mt-1">
                    <x-label for="form.f_name" value="First Name" />
                    <x-input wire:model.lazy="form.f_name" id="form.f_name" name="form.f_name" type="text" class="mt-2 w-full text-black" require autocomplete="form.f_name" />
                    <x-input-error for="form.f_name" class="mt-1"/>
                </div>

                <div class="mt-1">
                    <x-label for="form.l_name" value="Last Name" />
                    <x-input wire:model.lazy="form.l_name" id="form.l_name" name="form.l_name" type="text" class="mt-2 w-full text-black" require autocomplete="form.l_name" />
                    <x-input-error for="form.l_name" class="mt-1"/>
                </div> 

                <div class="mt-1">
                    <x-label for="form.email" value="Email" />
                    <x-input wire:model.lazy="form.email" id="form.email" name="form.email" type="email" class="mt-2 w-full text-black" require autocomplete="form.email" />
                    <x-input-error for="form.email" class="mt-1"/>
                </div> 

                <div class="mt-1">
                    <x-label for="form.contact" value="Contact" />
                    <x-input wire:model.lazy="form.contact" id="form.contact" name="form.contact" type="number" class="mt-2 w-full text-black" require autocomplete="form.contact" />
                    <x-input-error for="form.contact" class="mt-1"/>
                </div> 

                <div class="mt-1">
                    <x-label for="form.gender" value="Gender" />
                    <x-select wire:model.lazy="form.gender" id="form.gender" name="form.gender" >
                        <option value=""></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </x-select>
                </div> 

                <div class="mt-1">
                    <x-label for="form.age" value="Age" />
                    <x-input wire:model.lazy="form.age" id="form.age" name="form.age" type="number" class="mt-2 w-full text-black" require autocomplete="form.age" />
                    <x-input-error for="form.age" class="mt-1"/>
                </div> 
            </div>
        </x-slot>
    
        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalInstructorCreate', false)">
                {{ __('Cancel') }}
            </x-secondary-button>
    
            <x-button class="ms-3">
                Create
            </x-button>
        </x-slot>
    </x-dialog-modal>

    <script>
        window.addEventListener("swal", () => {
            Swal.fire({
                title: "Instructor Created",
                icon: "success"
            });
        });
    </script>
</div>