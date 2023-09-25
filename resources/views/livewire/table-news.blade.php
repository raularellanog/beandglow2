<div>
    <div class="grid grid-cols-3 md:grid-cols-1 my-4">
        <div class="col-start-3">

        </div>
    </div>
    <x-table>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <th scope="col" class="px-6 py-3">Nombre</th>
            <th scope="col" class="px-6 py-3">Palabras claves</th>
            <th scope="col" class="px-6 py-3">Fecha</th>
            <th scope="col" class="px-6 py-3"></th>
        </thead>
        @if ($data != null)
            @foreach ($data as $item)
                <tr class="bg-white border-b ">
                    <td class="px-6 py-4">{{ $item->new_title }}</td>
                    <td class="px-6 py-4">{{ $item->new_keywords }}</td>
                    <td class="px-6 py-4">{{ $item->new_date }}</td>
                    <td class="px-6 py-4">
                        <div class="text-end">
                            <a href="{{ URL('/admin/news/edit', $item->new_id) }}"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                            font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2  focus:outline-none"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
    </x-table>
    <div class="grid grid-cols-1 gap-2 my-2">
        {{ $data->links() }}
    </div>
</div>
