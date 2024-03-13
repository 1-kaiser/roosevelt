<div>
    <x-button @click="$wire.set('modalInstructorCreate', true)">Add Instructor</x-button>

    <x-dialog-modal wire:model.live="modalInstructorCreate" submit="save">
        <x-slot name="title">
            Instructor Information
        </x-slot>
    
        <x-slot name="content">

            <div class="mt-1 flex flex-col items-center">

                @if ($this->pic)
                <img src="{{ $this->pic->temporaryUrl() }}" alt="Preview" style="max-width: 100%; max-height: 200px;">
                @endif
                <x-label for="pic" value="Image" class="mt-2" />
                <x-input wire:model.lazy="pic" wire:model="pic" id="pic" name="pic" type="file" class="mt-2 pl-24" require autocomplete="pic" enctype="multipart/-data" />
                <x-input-error for="$this->pic" class="mt-1"/>
            </div>
            
            <div class="grid grid-cols-2 gap-4 mt-5">

                <div class="mt-1">
                    <x-label for="f_name" value="First Name" />
                    <x-input wire:model.lazy="f_name" id="f_name" name="f_name" type="text" class="mt-2 w-full text-black" require autocomplete="f_name" />
                    <x-input-error for="f_name" class="mt-1"/>
                </div>

                <div class="mt-1">
                    <x-label for="l_name" value="Last Name" />
                    <x-input wire:model.lazy="l_name" id="l_name" name="l_name" type="text" class="mt-2 w-full text-black" require autocomplete="l_name" />
                    <x-input-error for="l_name" class="mt-1"/>
                </div> 

                <div class="mt-1">
                    <x-label for="email" value="Email" />
                    <x-input wire:model.lazy="email" id="email" name="email" type="email" class="mt-2 w-full text-black" require autocomplete="email" />
                    <x-input-error for="email" class="mt-1"/>
                </div> 

                <div class="mt-1">
                    <x-label for="contact" value="Contact" />
                    <x-input wire:model.lazy="contact" id="contact" name="contact" type="number" class="mt-2 w-full text-black" require autocomplete="contact" />
                    <x-input-error for="contact" class="mt-1"/>
                </div> 

                <div class="mt-1">
                    <x-label for="gender" value="Gender" />
                    <x-select wire:model.lazy="gender" id="gender" name="gender" >
                        <option value=""></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </x-select>
                    <x-input-error for="gender" class="mt-1"/>
                </div> 

                <div class="mt-1">
                    <x-label for="age" value="Age" />
                    <x-input wire:model.lazy="age" id="age" name="age" type="number" class="mt-2 w-full text-black" require autocomplete="age" />
                    <x-input-error for="age" class="mt-1"/>
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