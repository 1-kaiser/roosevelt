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
                
                    <table class="text-black w-full mt-3 sm:w-sm">
                        <thead>
                            <tr>
                                <th class="p-2 whitespace-wrap border border-1">ID</th>
                                <th class="p-2 whitespace-wrap border border-1">Image</th>
                                <th class="p-2 whitespace-wrap border border-1">First Name</th>
                                <th class="p-2 whitespace-wrap border border-1">Last Name</th>
                                <th class="p-2 whitespace-wrap border border-1">Email</th>
                                <th class="p-2 whitespace-wrap border border-1">Contact</th>
                                <th class="p-2 whitespace-wrap border border-1">Gender</th>
                                <th class="p-2 whitespace-wrap border border-1">Age</th>
                                <th class="p-2 whitespace-wrap border border-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($data)
                                @foreach ($data as $instructor)
                                    <tr align="center">
                                        <td class="p-2 whitespace-wrap border border-1">{{$instructor->id}}</td>
                                        <td class="p-2 whitespace-wrap border border-1"><img src="{{ asset('storage/'.$instructor->pic) }}" class="w-22 h-16" /></td>
                                        <td class="p-2 whitespace-wrap border border-1">{{$instructor->f_name}}</td>
                                        <td class="p-2 whitespace-wrap border border-1">{{$instructor->l_name}}</td>
                                        <td class="p-2 whitespace-wrap border border-1">{{$instructor->email}}</td>
                                        <td class="p-2 whitespace-wrap border border-1">{{$instructor->contact}}</td>
                                        <td class="p-2 whitespace-wrap border border-1">{{$instructor->gender}}</td>
                                        <td class="p-2 whitespace-wrap border border-1">{{$instructor->age}}</td>
                                        <td class="p-2 flex gap-2 justify-center flex-wrap border border-1">
                                            
                                            <x-button @click="$wire.denied({ name: '{{ $instructor->name }}' })" class="text-sm text-white">View</x-button>
                                        </td>
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
