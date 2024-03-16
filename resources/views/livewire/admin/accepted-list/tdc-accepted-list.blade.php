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

                            {{-- Action --}}
                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                              
                                <x-button class="text-sm text-white bg-sky-700" @click="$wire.edit({ name: '{{ $customer->name }}' })" >Edit</x-button>

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
                            <img src="{{ asset('storage/'. $row->pic) }}" class="w-40 h-33 mb-1" />
                            <x-label for="name" value="Customer Picture" />
                      </div>
                      {{-- Picture --}}

                      <div class="grid grid-cols-2 gap-4 mt-5">

                        {{-- Name --}}
                        <div class="mt-1">
                          <x-label for="name" value="Name" />
                          <x-input wire:model.lazy="name" value="{{$row->name}}" id="name" name="name" type="text" class="mt-2 w-full text-black" readonly />
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
                          <x-select class="mt-2 text-black w-full">
                              <option value=""></option>
                              @isset($instructor)
                                  @foreach ($instructor as $ins)
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
      
              <x-button class="ms-3" @click="$wire.save({ name: '{{ $row->name }}' })">
                  Reserve
              </x-button>
            </x-slot>
        </x-dialog-modal>

      @endforeach
    @endisset

    <script>
      window.addEventListener("swal", () => {
          Swal.fire({
              title: "Instructor Created",
              icon: "success"
          });
      });
  </script>
</div>



