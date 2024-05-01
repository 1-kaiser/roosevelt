<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Denied History') }}
        </h2>
    </x-slot>

    <div class="flex justify-end pt-5 pb-2 pr-[4.1rem] gap-2">

        <button @click="$wire.exportXLSX()" id="button" class="group rounded-md shadow bg-green-500 text-white cursor-pointer    flex justify-between items-center overflow-hidden transition-all hover:glow">
            <div class="relative w-8 h-8 bg-white bg-opacity-20 text-white flex justify-center items-center transition-all">
                <svg id="arrow" class="w-4 h-4 transition-all group-hover:-translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
                <svg id="check" class="absolute z-10 w-0 top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 text-white transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <div id="progress" class="absolute w-full h-0 bg-white bg-opacity-20 top-0 duration-200"></div>
            </div>
              <p class="px-5 text-sm">XLSX</p>
          </button>
  
          <button @click="$wire.exportPDF()" id="button" class="group rounded-md shadow bg-red-500 text-white cursor-pointer    flex justify-between items-center overflow-hidden transition-all hover:glow">
            <div class="relative w-8 h-8 bg-white bg-opacity-20 text-white flex justify-center items-center transition-all">
                <svg id="arrow" class="w-4 h-4 transition-all group-hover:-translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
                <svg id="check" class="absolute z-10 w-0 top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 text-white transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <div id="progress" class="absolute w-full h-0 bg-white bg-opacity-20 top-0 duration-200"></div>
            </div>
              <p class="px-5 text-sm">PDF</p>
          </button>
  
        {{-- <x-button @click="$wire.exportXLSX()">XLSX</x-button>
        <x-button @click="$wire.exportPDF()">PDF</x-button> --}}
      </div>

    <div class="py-3">
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
                                Course
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
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$customer->first_name}} {{$customer->last_name}}
                                </p>
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
                
                            {{-- Action --}}
                            <td class="px-5 py-5 border-b border-gray-200 text-center text-sm">
                                
                                <x-danger-button @click="$wire.confirmDelete({ first_name: '{{ $customer->first_name }}' })" class="text-sm text-white">Delete Permanently</x-danger-button>
                
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

    {{-- <footer class="fixed left-0 bottom-0 w-full">
        <div class="max-w-full sm:px-6 lg:px-1">
            <div class="p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="flex flex-col items-start justify-between border-t border-gray-100 md:flex-row md:items-center">
                <p class="mb-6 text-sm text-left text-gray-600 md:mb-0">© Copyright IS 3A Group 5. All Rights Reserved.</p>
                <div class="flex items-start justify-start space-x-6 md:items-center md:justify-center">
                    <a href="#_" class="text-sm text-gray-600 transition hover:text-primary">Terms</a>
                    <a href="#_" class="text-sm text-gray-600 transition hover:text-primary">Privacy</a>
                </div>
            </div>
            </div>
        </div>
    </footer> --}}


    <script>
        window.addEventListener("confirm-delete", function() {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    @this.delete()
                    Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                    });
                }
            }); 
        });
    </script>
</div>