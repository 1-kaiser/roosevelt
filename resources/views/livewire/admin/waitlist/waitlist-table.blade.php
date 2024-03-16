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
                <div class="flex">
                    <div class="ml-3">
                    <p class="text-gray-900 whitespace-no-wrap">
                        {{$loop->iteration}}
                    </p>
                    </div>
                </div>
                </td>
            {{-- # --}}

            {{-- Name --}}
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <div class="ml-3">
                    <p class="text-gray-900 whitespace-no-wrap">
                    {{$customer->name}}
                    </p>
                </div>
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
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                <p class="text-gray-900 whitespace-no-wrap">{{$customer->transmission}}</p>
            </td>
            {{-- Transmission --}}

            {{-- Action --}}
            <td class="px-5 py-5 border-b border-gray-200 text-sm text-center">

                <x-button @click="$wire.viewCustomer({ name: '{{ $customer->name }}' })" class="text-sm text-white">View</x-button>
                
                <x-button @click="$wire.accepted({ name: '{{ $customer->name }}' })" class="text-sm text-white bg-sky-700">Accept</x-button>
                            
                <x-danger-button @click="$wire.denied({ name: '{{ $customer->name }}' })" class="text-sm text-white">Deny</x-danger-button>

            </td>
            {{-- Action --}}
            </tr>
            @endforeach
            @endisset
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
        </tbody>
    </table>
    <div class="mt-3">{{$data->links()}}</div>

    <x-dialog-modal wire:model.live="modalView" submit="save">
        <x-slot name="title">
            Customer Information
        </x-slot>
    
        <x-slot name="content">
            @isset($viewData)
                @foreach($viewData as $row)
                    <div class="flex">
                        <div class="mt-4 mr-16 flex flex-col items-center">
                            <div>
                                <x-label for="name" value="Customer Picture" />
                                <img src="{{ asset('storage/'.$row->pic) }}" class="w-40 h-33 mt-1" />
                            </div>

                            <div class="mt-1">
                                <x-label for="paid_attachment" value="Proof of Payment" class="mt-2"/>
                                <img src="{{ asset('storage/'.$row->paid_attachment) }}" class="w-40 h-33 mt-1" />
                            </div> 
                        </div>

                        <div class="grid grid-cols-2 gap-4 mt-5 absolute left-60">
                                <div class="mt-1">
                                    <x-label for="name" value="Name" />
                                    <x-input wire:model.lazy="name" value="{{$row->name}}" id="name" name="name" type="text" class="mt-2 w-full text-black" readonly />
                                </div>
            
                                <div class="mt-1">
                                    <x-label for="contact" value="Contact" />
                                    <x-input wire:model.lazy="contact" value="{{$row->contact}}" id="contact" name="contact" type="text" class="mt-2 w-full text-black" readonly />
                                </div>
            
                                <div class="mt-1">
                                    <x-label for="email" value="Email" />
                                    <x-input wire:model.lazy="email" value="{{$row->email}}" id="email" name="email" type="text" class="mt-2 w-full text-black" readonly />
                                </div>
            
                                <div class="mt-1">
                                    <x-label for="date" value="Date" />
                                    <x-input wire:model.lazy="date" value="{{$row->date}}" id="date" name="date" type="text" class="mt-2 w-full text-black" readonly />
                                </div>
            
                                <div class="mt-1">
                                    <x-label for="transmission" value="Transmission" />
                                    <x-input wire:model.lazy="transmission" value="{{$row->transmission}}" id="transmission" name="transmission" type="text" class="mt-2 w-full text-black" readonly />
                                </div>
                        </div>
                    </div>
                @endforeach
            @endisset
        </x-slot>
    
        <x-slot name="footer">
        </x-slot>
    </x-dialog-modal>
</div>
