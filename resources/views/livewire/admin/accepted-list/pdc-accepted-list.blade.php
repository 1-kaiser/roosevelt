<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PDC Accepted List') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
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
                                Transmission
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
                                <div class="flex">
                                <div class="flex-shrink-0 w-10 h-10">
                                    <img
                                    class="w-full h-full rounded-full"
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                    alt=""
                                    />
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                    {{$customer->name}}
                                    </p>
                                </div>
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
                
                            {{-- Transmission --}}
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$customer->transmission}}</p>
                            </td>
                            {{-- Transmission --}}
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
    
    @if(session()->has('success'))
        <script>
            Swal.fire({
            icon: "success",
            title: "Registered Successfully",
            text: "Please wait for the confirmation",
            });
        </script>
    @endif
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



