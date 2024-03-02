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
                <th class="p-2 whitespace-wrap border border-1">Driving Vehicle</th>
                <th class="p-2 whitespace-wrap border border-1">Driving Course</th>
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
                        <td class="p-2 whitespace-wrap border border-1">{{$customer->vehicle}}</td>
                        <td class="p-2 whitespace-wrap border border-1">{{$customer->driving_course}}</td>
                        {{-- <td class="p-2 whitespace-wrap border border-1">

                            <x-button @click="$dispatch('dispatch-items-table-edit', { id: '{{ $item->id }}' })" type="button" class="text-sm text-white bg-sky-700">Edit</x-button>
                            
                            <x-danger-button @click="$dispatch('dispatch-items-table-delete', { id: '{{ $item->id }}', name: '{{ $item->name }}' })" type="button" class="text-sm text-white">Delete</x-danger-button>
                        </td> --}}
                    </tr>
                @endforeach
            @endisset
        </tbody>
    </table>
    <div class="mt-3">{{$data->links()}}</div>
</div>
