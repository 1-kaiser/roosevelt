<div>
    <h2 class="mb-2 font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Inquiries') }}
    </h2>

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
                Contact
            </th>
            <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
            >
                Inquiry
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
            @isset($inquiries)
            @foreach ($inquiries as $customer)
            <tr>
            {{-- # --}}
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                <p class="text-gray-900 whitespace-no-wrap">{{$loop->iteration}}</p>
                </td>
            {{-- # --}}

            {{-- Name --}}
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{$customer->name}}</p>
            </td>
            {{-- Name --}}

            {{-- Email --}}
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{$customer->email}}</p>
            </td>
            {{-- Email --}}

            {{-- Contact --}}
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{$customer->contact}}</p>
            </td>
            {{-- Contact --}}

            {{-- Inquiry --}}
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{$customer->message}}</p>
            </td>
            {{-- Inquiry --}}

            {{-- Action --}}
            <td class="px-5 py-5 border-b border-gray-200 text-sm text-center">

                <x-button @click="$wire.answer({ name: '{{ $customer->name }}' })" class="text-sm text-white">Answer</x-button>

            </td>
            {{-- Action --}}
            </tr>
            @endforeach
            @endisset
        </tbody>
    </table>
    <div class="mt-3">{{$inquiries->links()}}</div>

    <script>
        window.addEventListener("swal", () => {
            Swal.fire({
                title: 'Success',
                text: 'Customer status successfully updated',
                icon: 'success',
            });
        });
    </script>
</div>
