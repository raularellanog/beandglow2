<div class="grid grid-cols-10 gap-4">
    <div class="col-span-2 col-start-8">
        <x-input-search wire:model.lazy='search'></x-input-search>
    </div>
    <div class="col-span-10">
        <x-table search="true">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Estatus
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha de inicio
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha de fin
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
            </thead>
            <tbody>
                @if (count($data) > 0)
                    @foreach ($data as $item)
                        <tr class="bg-white border-b ">
                            <td class="px-6 py-4">{{ $item->stopwatch_name }}</td>
                            <td class="px-6 py-4">
                                <x-status status="{{ $item->stopwatch_status }}" />
                            </td>
                            <td class="px-6 py-4">{{ $item->stopwatch_start }}</td>
                            <td class="px-6 py-4">{{ $item->stopwatch_end }}</td>
                            <td class="px-6 py-4 text-end">
                                <a href="{{ URL('/admin/stopwatchs/edit', $item->stopwatch_id) }}"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 "><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </x-table>
    </div>
    <div class="grid grid-cols-1 gap-2 my-2">
        {{ $data->links() }}
    </div>
</div>
