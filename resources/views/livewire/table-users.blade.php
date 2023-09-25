<div class="grid grid-cols-10 gap-4">
    <div class="col-span-2 col-start-8">
        <x-input-search wire:model.lazy='search'></x-input-search>
    </div>
    <div class="col-span-10">
        <x-table search="true">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">

                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha de modificación
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
            </thead>
            <tbody>
                @if (count($data) > 0)
                    @foreach ($data as $item)
                        <tr>
                            <td class="px-6 py-4">
                                {{ $item->id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->updated_at }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ URL('/admin/users/edit', base64_encode($item->id)) }}"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2  focus:outline-none"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                @endif
            </tbody>
        </x-table>
    </div>
    <div>
        {{ $data->links() }}
    </div>
</div>
