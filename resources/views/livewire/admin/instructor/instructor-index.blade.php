<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Instructor') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class=" flex justify-end">
                    <livewire:admin.instructor.instructor-create />
                </div>
                
                <div>
                    <div class="mt-5">
                        <x-select wire:model.live="paginate" class="text-black text-xs">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </x-select>
                
                        <x-input wire:model.live="searchCustomer" placeholder="Search instructor" type="search" class="text-sm text-black text-end mb-2 float-end border-gray-400"  />
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
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                            >
                                Gender
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                            >
                                Age
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
                                <div class="flex">
                                    <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$loop->iteration}}
                                    </p>
                                    </div>
                                </div>
                                </td>
                            {{-- # --}}

                            {{-- Image --}}
                            <td class="px-5 py-5 bg-white text-sm">
                                <img src="{{ asset('storage/'.$instructor->pic) }}" class="w-22 h-16 " />
                            </td>
                            {{-- Image --}}
                
                            {{-- Name --}}
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                    {{$instructor->f_name}} {{$instructor->l_name}}
                                    </p>
                                </div> 
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
                
                            {{-- Course --}}
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$instructor->gender}}</p>
                            </td>
                            {{-- Course --}}
                
                            {{-- Transmission --}}
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$instructor->age}}</p>
                            </td>
                            {{-- Transmission --}}
                
                            {{-- Action --}}
                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                
                                <x-button @click="$wire.denied({ name: '{{ $instructor->name }}' })" class="text-sm text-white">View</x-button>
                
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
</div>
