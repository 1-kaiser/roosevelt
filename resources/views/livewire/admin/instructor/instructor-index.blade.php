<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Instructor') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="flex justify-end">
                    <livewire:admin.instructor.instructor-create />
                </div>
                
                <div>
                    <div class="mt-3">
                        <x-select wire:model.live="paginate" class="text-black text-xs">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </x-select>
                
                        <div class="border rounded overflow-hidden flex float-end text-sm mb-2 text-black">
                            <input wire:model.live="searchCustomer" type="search" class="px-4 py-2 border-gray-300 text-sm" placeholder="Search...">
                            <button class="flex items-center justify-center px-4 border-l">
                            <svg class="h-4 w-4 text-grey-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
                            </button>
                        </div>
                    </div>

                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                            >
                                #
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                            >
                                Image
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                            >
                                Instructor Name
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                            >
                                Email
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                            >
                                Contact
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
                                @foreach ($data as $instructor)
                            <tr>
                            {{-- # --}}
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$loop->iteration}}</p>
                                </td>
                            {{-- # --}}

                            {{-- Image --}}
                            <td class="px-5 py-5 bg-white text-sm">
                                <img src="{{ asset('storage/'.$instructor->pic) }}" class="w-22 h-16 " />
                            </td>
                            {{-- Image --}}
                
                            {{-- Name --}}
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$instructor->f_name}} {{$instructor->l_name}}</p>
                            </td>
                            {{-- Name --}}
                
                            {{-- Email --}}
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$instructor->email}}</p>
                            </td>
                            {{-- Email --}}
                
                            {{-- Date --}}
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$instructor->contact}}</p>
                            </td>
                            {{-- Date --}}
                
                            {{-- Action --}}
                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                
                                <x-button @click="$wire.viewInstructor({ f_name: '{{ $instructor->f_name }}' })" class="text-sm text-white">View</x-button>
                
                            </td>
                            {{-- Action --}}
                            </tr>
                            @endforeach
                            @endisset
                        </tbody>
                    </table>
                    <div class="mt-3">{{$data->links()}}</div>
                </div>
            </div>
        </div>
    </div>


    <x-dialog-modal wire:model.live="modalView" submit="save">
        <x-slot name="title">
            Instructor Information
        </x-slot>
    
        <x-slot name="content">

            @isset ($viewData)
                @foreach ($viewData as $row)
                <div class="mt-1 flex flex-col items-center">
                    <img src="{{ asset('storage/'.$row->pic) }}" alt="Preview" style="max-width: 100%; max-height: 200px;">
                    <x-label for="pic" value="Image" class="mt-2" />
                </div>
                
                <div class="grid grid-cols-2 gap-4 mt-5">
    
                    <div class="mt-1">
                        <x-label for="f_name" value="First Name" />
                        <x-input wire:model.lazy="f_name" id="f_name" name="f_name" type="text" class="mt-2 w-full text-black" readonly value="{{$row->f_name}}" />
                    </div>
    
                    <div class="mt-1">
                        <x-label for="l_name" value="Last Name" />
                        <x-input wire:model.lazy="l_name" id="l_name" name="l_name" type="text" class="mt-2 w-full text-black" readonly value="{{$row->l_name}}"/>
                    </div> 
    
                    <div class="mt-1">
                        <x-label for="email" value="Email" />
                        <x-input wire:model.lazy="email" id="email" name="email" type="email" class="mt-2 w-full text-black" readonly value="{{$row->email}}"/>
                    </div> 
    
                    <div class="mt-1">
                        <x-label for="contact" value="Contact" />
                        <x-input wire:model.lazy="contact" id="contact" name="contact" type="number" class="mt-2 w-full text-black" readonly value="{{$row->contact}}"/>
                    </div> 
    
                    <div class="mt-1">
                        <x-label for="gender" value="Gender" />
                        <x-input wire:model.lazy="gender" id="gender" name="gender" type="text" class="mt-2 w-full text-black" readonly value="{{$row->gender}}"/>
                    </div> 
    
                    <div class="mt-1">
                        <x-label for="age" value="Age" />
                        <x-input wire:model.lazy="age" id="age" name="age" type="number" class="mt-2 w-full text-black" readonly value="{{$row->age}}"/>
                    </div> 
                </div>
                @endforeach
            @endisset
        </x-slot>
    
        <x-slot name="footer">
        </x-slot>
    </x-dialog-modal>
</div>
