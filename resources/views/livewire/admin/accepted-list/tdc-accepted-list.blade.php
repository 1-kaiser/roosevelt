<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('TDC Accepted List') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div>
                    <div class="mt-5">
                        <x-select wire:model.live="paginate" class="text-black text-xs">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </x-select>
                
                        <x-input wire:model.live="searchCustomer" placeholder="Search customer" type="search" class="text-sm text-black text-end mb-2 float-end border-gray-400"  />
                    </div>
                
                    <table class="text-black w-full mt-3 sm:w-sm">
                        <thead>
                            <tr>
                                <th class="p-2 whitespace-wrap border border-1">ID</th>
                                <th class="p-2 whitespace-wrap border border-1">Name</th>
                                <th class="p-2 whitespace-wrap border border-1">Email</th>
                                <th class="p-2 whitespace-wrap border border-1">Branch</th>
                                <th class="p-2 whitespace-wrap border border-1">Date</th>
                                <th class="p-2 whitespace-wrap border border-1">Course</th>
                                <th class="p-2 whitespace-wrap border border-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($data)
                                @foreach ($data as $customer)
                                    <tr align="center">
                                        <td class="p-2 whitespace-wrap border border-1">{{$customer->id}}</td>
                                        <td class="p-2 whitespace-wrap border border-1">{{$customer->name}}</td>
                                        <td class="p-2 whitespace-wrap border border-1">{{$customer->email}}</td>
                                        <td class="p-2 whitespace-wrap border border-1">{{$customer->branch}}</td>
                                        <td class="p-2 whitespace-wrap border border-1">{{$customer->date}}</td>
                                        <td class="p-2 whitespace-wrap border border-1">{{$customer->course}}</td>
                                        <td class="p-2 flex gap-2 justify-center flex-wrap border border-1">
                
                                            {{-- <x-button @click="$wire.accepted({ name: '{{ $customer->name }}' })" class="text-sm text-white bg-sky-700">Edit</x-button> --}}

                                            <x-button class="text-sm text-white bg-sky-700" @click="$wire.save({ name: '{{ $customer->name }}' })" >Edit</x-button>
                                            
                                            {{-- <x-danger-button type="button" class="text-sm text-white">Deny</x-danger-button> --}}
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

    <x-dialog-modal wire:model.live="modalTDCEdit" submit="save">
        <x-slot name="title">
            Customer Information
        </x-slot>
    
        <x-slot name="content">
            <div class="grid grid-cols-2 gap-4 mt-5">

                @isset($accepted)
                    @foreach($accepted as $row)

                    <div class="mt-1">
                        <x-label for="name" value="Name" />
                        <x-input wire:model.lazy="name" value="{{$row->name}}" id="name" name="name" type="text" class="mt-2 w-full text-black" readonly />
                    </div>

                    <div class="mt-1">
                        <x-label for="branch" value="Branch" />
                        <x-input wire:model.lazy="branch" value="{{$row->branch}}" id="branch" name="branch" type="text" class="mt-2 w-full text-black" readonly />
                    </div>

                    <div class="mt-1">
                        <x-label for="email" value="Email" />
                        <x-input wire:model.lazy="email" value="{{$row->email}}" id="email" name="email" type="text" class="mt-2 w-full text-black" readonly />
                    </div>

                    <div class="mt-1">
                        <x-label for="date" value="Date" />
                        <x-input wire:model.lazy="date" value="{{$row->date}}" id="date" name="date" type="text" class="mt-2 w-full text-black" readonly />
                    </div>

                    @endforeach
                @endisset

                <div class="mt-1">
                    <x-label for="instructor" value="Instructor" />
                    <x-select class="mt-2 text-black">
                        <option value=""></option>
                        @isset($instructor)
                            @foreach ($instructor as $ins)
                                <option value="{{$ins->f_name}}">{{$ins->f_name}}</option>
                            @endforeach
                        @endisset
                    </x-select>
                </div>
            </div>
        </x-slot>
    
        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalTDCEdit', false)">
                {{ __('Cancel') }}
            </x-secondary-button>
    
            <x-button class="ms-3">
                Reserve
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>



