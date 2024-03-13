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
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider" align="center"
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
            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                
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
</div>
