<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('TDC Accepted List') }}
        </h2>
    </x-slot>

    <div class="flex justify-end pt-5 pb-2 pr-[4.7rem] gap-2">

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
                              Image
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

                            {{-- Image --}}
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                              <img src="{{ asset('storage/'.$customer->pic) }}" class="w-22 h-16 " />
                            </td>
                          {{-- Image --}}

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

                            {{-- Action --}}
                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                              
                                <x-button class="text-sm text-white bg-sky-700" @click="$wire.edit({ first_name: '{{ $customer->first_name }}' })" >Edit</x-button>

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

    @isset($accepted)
    @foreach($accepted as $row)

    <x-dialog-modal wire:model.live="modalTDCEdit" submit="save">
        <x-slot name="title">
            Customer Information
        </x-slot>
    
        <x-slot name="content">

                <div class="mt-1">

                  {{-- Picture --}}
                  <div class="mt-4 flex flex-col items-center">
                        <img src="{{ asset('storage/'. $row->pic) }}" 
                        wire:model.lazy="pic" name="pic" class="w-40 h-33 mb-1" />
                        <x-label for="name" value="Customer Picture" />
                  </div>
                  {{-- Picture --}}

                  <div class="grid grid-cols-2 gap-4 mt-5">

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

                    {{-- Date --}}
                    <div class="mt-1">
                        <x-label for="date" value="Date" />
                        <x-input wire:model.lazy="date" value="{{$row->date}}" id="date" name="date" type="date" class="mt-2 w-full text-black" />
                        <x-input-error for="date" class="mt-1"/>
                    </div>
                    {{-- Date --}}

                    {{-- Instructor --}}
                    <div class="mt-1">
                      <x-label for="instructor" value="Instructor" />
                      <x-select class="mt-2 text-black w-full" wire:model.lazy="instructor" name="instructor">
                          <option value=""></option>
                          @isset($instructorList)
                          @foreach ($instructorList as $ins)
                            <option value="{{$ins->f_name}}">{{$ins->f_name}}</option>
                          @endforeach
                          @endisset
                      </x-select>
                    </div>
                    {{-- Instructor --}}

                  </div>
                </div>
        </x-slot>
    
        <x-slot name="footer">
          <x-secondary-button @click="$wire.set('modalTDCEdit', false)">
            {{ __('Cancel') }}
          </x-secondary-button>
  
          <x-button class="ms-3" @click="$wire.save({ first_name: '{{ $row->first_name }}' })">
              Reserve
          </x-button>
        </x-slot>
    </x-dialog-modal>

    @endforeach
    @endisset

    <script>
      window.addEventListener("swal", () => {
          Swal.fire({
              title: "Updated Successfully",
              icon: "success"
          });
      });
  </script>
</div>



