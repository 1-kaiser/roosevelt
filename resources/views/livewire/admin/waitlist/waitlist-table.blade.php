<div>
    <div class="mt-3">
        {{-- Paginate --}}
        <x-select wire:model.live="paginate" class="text-black text-xs">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </x-select>
        {{-- Paginate --}}

        {{-- Search Bar --}}
        <div class="border rounded overflow-hidden flex float-end text-sm mb-2 text-black">
            <input wire:model.live="searchCustomer" type="search" class="px-4 py-2 border-gray-300 text-sm" placeholder="Search...">
            <button class="flex items-center justify-center px-4 border-l">
            <svg class="h-4 w-4 text-grey-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
            </button>
        </div>
        {{-- Search Bar --}}

    </div>

    <table class="min-w-full leading-normal">
        <thead>
            <tr>
            <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs text-center font-semibold text-gray-700 uppercase tracking-wider"
            >
                #
            </th>
            <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
            >
                Customer Name
            </th>
            <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
            >
                Email
            </th>
            <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
            >
                Date
            </th>
            <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
            >
                Course
            </th>
            <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
            >
                Transmission
            </th>
            <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider" 
            >
                Action
            </th>
            <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"
            ></th>
            </tr>
        </thead>
        <tbody>
            @isset($data)
            @foreach ($data as $customer)
            <tr>
            {{-- # --}}
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{$loop->iteration}}</p>
                </td>
            {{-- # --}}

            {{-- Name --}}
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{$customer->first_name}} {{$customer->last_name}}</p>
            </td>
            {{-- Name --}}

            {{-- Email --}}
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{$customer->email}}</p>
            </td>
            {{-- Email --}}

            {{-- Date --}}
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{$customer->date}}</p>
            </td>
            {{-- Date --}}

            {{-- Course --}}
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{$customer->course}}</p>
            </td>
            {{-- Course --}}

            {{-- Transmission --}}
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{$customer->transmission}}</p>
            </td>
            {{-- Transmission --}}

            {{-- Action --}}
            <td class="px-5 py-5 border-b border-gray-200 text-sm text-center">

                <x-button @click="$wire.viewCustomer({ first_name: '{{ $customer->first_name }}' })" class="text-sm text-white">View</x-button>
                
                <x-button @click="$wire.accepted({ first_name: '{{ $customer->first_name }}' })" class="text-sm text-white bg-sky-700">Accept</x-button>
                            
                {{-- <x-danger-button @click="$wire.denied({ first_name: '{{ $customer->first_name }}' })" class="text-sm text-white">Deny</x-danger-button> --}}

                {{-- Reason for Denial --}}
                <x-danger-button @click="$wire.reasonForDenial({ first_name: '{{ $customer->first_name }}' })" class="text-sm text-white">Deny</x-danger-button>

            </td>
            {{-- Action --}}
            </tr>
            @endforeach
            @endisset
        </tbody>
    </table>
    <div class="mt-3">{{$data->links()}}</div>

    <script>
        window.addEventListener("swal", () => {
            Swal.fire({
                title: 'Success',
                text: 'Customer status successfully updated',
                icon: 'success',
            });
        });
    </script>

    {{-- Reason For Denial --}}

    @isset ($viewDataDeny)
    @foreach ($viewDataDeny as $row)
    <x-dialog-modal wire:model.live="modalReasonForDenial" submit="denied">
        <x-slot name="title">
            Reason for Denial
        </x-slot>
    
        <x-slot name="content">
            <div class="grid grid-cols-2 gap-2">
                {{-- Name --}}
                <div class="mt-1">
                    <x-label for="name" value="Name" />
                    <x-input wire:model.lazy="name" value="{{$row->first_name}} {{$row->last_name}}" id="name" name="name" type="text" class="mt-2 w-full text-black" readonly />
                </div>
                {{-- Name --}}
                {{-- Contact --}}
                <div class="mt-1">
                    <x-label for="contact" value="Contact" />
                    <x-input wire:model.lazy="contact" value="{{$row->contact}}" id="contact" name="contact" type="text" class="mt-2 w-full text-black" readonly />
                </div>
                {{-- Contact --}}
            </div>

            <div class="grid grid-cols-2 gap-2 mt-3">
                {{-- Email --}}
                <div class="mt-1">
                    <x-label for="email" value="Email" />
                    <x-input wire:model.lazy="email" value="{{$row->email}}" id="email" name="email" type="text" class="mt-2 w-full text-black" readonly />
                </div>
                {{-- Email --}}

                {{-- Age --}}
                <div class="mt-1">
                    <x-label for="age" value="Age" />
                    <x-input wire:model.lazy="age" value="{{$row->age}}" id="age" name="age" type="text" class="mt-2 w-full text-black" readonly />
                </div>
                {{-- Age --}}
            </div>

            <div class="grid grid-cols-2 gap-2 mt-3">
                {{-- Birthday --}}
                <div class="mt-1">
                    <x-label for="birthday" value="Birthday" />
                    <x-input wire:model.lazy="birthday" value="{{$row->birthday}}" id="birthday" name="birthday" type="text" class="mt-2 w-full text-black" readonly />
                </div>
                {{-- Birthday --}}

                {{-- Date --}}
                <div class="mt-1">
                    <x-label for="date" value="Date" />
                    <x-input wire:model.lazy="date" value="{{$row->date}}" id="date" name="date" type="text" class="mt-2 w-full text-black" readonly />
                </div>
                {{-- Date --}}
            </div>

            <div class="grid grid-cols-2 gap-2 mt-3">
                {{-- Course --}}
                <div class="mt-1">
                    <x-label for="course" value="Course" />
                    <x-input wire:model.lazy="course" value="{{$row->course}}" id="course" name="course" type="text" class="mt-2 w-full text-black" readonly />
                </div>
                {{-- Course --}}

                {{-- Transmission --}}
                <div class="mt-1">
                    <x-label for="transmission" value="Transmission" />
                    <x-input wire:model.lazy="transmission" value="{{$row->transmission}}" id="transmission" name="transmission" type="text" class="mt-2 w-full text-black" readonly />
                </div>
                {{-- Transmission --}}
            </div>

            {{-- Deny Reason --}}
                <div class="mt-3">
                    <x-label for="deny_reason" value="Reason to Deny" />
                    <x-select name="deny_reason" class="text-black mt-2" wire:model.lazy="deny_reason">
                        <option value=""></option>
                        <option value="Cancel of Reservation">Cancel of reservation</option>
                        <option value="Not Responding to Confirmation">Not responding to confirmation</option>
                        <option value="Change of mind">Change of mind</option>
                    </x-select>
                </div>
            {{-- Deny Reason --}}
        </x-slot>
    
        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalReasonForDenial', false)">
                {{ __('Cancel') }}
              </x-secondary-button>
      
              <x-danger-button type="submit" class="ms-3" @click="$wire.denied({ first_name: '{{ $row->first_name }}' })">
                  Deny
              </x-danger-button>
        </x-slot>
    </x-dialog-modal>
    @endforeach
    @endisset

    {{-- End Reason For Denial --}}

    <x-dialog-modal wire:model.live="modalView" submit="save">
        <x-slot name="title">
            Customer Information
        </x-slot>
    
        <x-slot name="content">
            @isset($viewData)
                @foreach($viewData as $row)
                    <div class="flex">
                        <div class="mt-4 mr-16 flex flex-col items-center">
                            {{-- Picture --}}
                            <div>
                                <x-label for="name" value="Customer Picture" />
                                <img src="{{ asset('storage/'.$row->pic) }}" class="w-40 h-33 mt-1" />
                            </div>
                            {{-- Picture --}}

                            {{-- Proof of Payment --}}
                            <div class="mt-1">
                                <x-label for="paid_attachment" value="Proof of Payment" class="mt-2"/>
                                <img src="{{ asset('storage/'.$row->paid_attachment) }}" class="w-40 h-33 mt-1" />
                            </div> 
                            {{-- Proof of Payment --}}
                        </div>

                        <div class="grid grid-cols-2 gap-4 mt-5 absolute left-60">
                            {{-- Name --}}
                            <div class="mt-1">
                                <x-label for="name" value="Name" />
                                <x-input wire:model.lazy="name" value="{{$row->first_name}} {{$row->last_name}}" id="name" name="name" type="text" class="mt-2 w-full text-black" readonly />
                            </div>
                            {{-- Name --}}
        
                            {{-- Contact --}}
                            <div class="mt-1">
                                <x-label for="contact" value="Contact" />
                                <x-input wire:model.lazy="contact" value="{{$row->contact}}" id="contact" name="contact" type="text" class="mt-2 w-full text-black" readonly />
                            </div>
                            {{-- Contact --}}
        
                            {{-- Email --}}
                            <div class="mt-1">
                                <x-label for="email" value="Email" />
                                <x-input wire:model.lazy="email" value="{{$row->email}}" id="email" name="email" type="text" class="mt-2 w-full text-black" readonly />
                            </div>
                            {{-- Email --}}

                            {{-- Age --}}
                            <div class="mt-1">
                                <x-label for="age" value="Age" />
                                <x-input wire:model.lazy="age" value="{{$row->age}}" id="age" name="age" type="text" class="mt-2 w-full text-black" readonly />
                            </div>
                            {{-- Age --}}

                            {{-- Birthday --}}
                            <div class="mt-1">
                                <x-label for="birthday" value="Birthday" />
                                <x-input wire:model.lazy="birthday" value="{{$row->birthday}}" id="birthday" name="birthday" type="text" class="mt-2 w-full text-black" readonly />
                            </div>
                            {{-- Birthday --}}
        
                            {{-- Date --}}
                            <div class="mt-1">
                                <x-label for="date" value="Date" />
                                <x-input wire:model.lazy="date" value="{{$row->date}}" id="date" name="date" type="text" class="mt-2 w-full text-black" readonly />
                            </div>
                            {{-- Date --}}

                            {{-- Course --}}
                            <div class="mt-1">
                                <x-label for="course" value="Course" />
                                <x-input wire:model.lazy="course" value="{{$row->course}}" id="course" name="course" type="text" class="mt-2 w-full text-black" readonly />
                            </div>
                            {{-- Course --}}
        
                            {{-- Transmission --}}
                            <div class="mt-1">
                                <x-label for="transmission" value="Transmission" />
                                <x-input wire:model.lazy="transmission" value="{{$row->transmission}}" id="transmission" name="transmission" type="text" class="mt-2 w-full text-black" readonly />
                            </div>
                            {{-- Transmission --}}

                            {{-- Valid ID --}}
                            <div class="mt-1">
                                <x-label for="valid_id" value="Valid ID" class="mt-2"/>
                                <img src="{{ asset('storage/'.$row->valid_id) }}" class="w-40 h-33 mt-1" />
                            </div> 
                            {{-- Valid ID --}}
                        </div>
                    </div>
                @endforeach
            @endisset
        </x-slot>
    
        <x-slot name="footer">
        </x-slot>
    </x-dialog-modal>
</div>
