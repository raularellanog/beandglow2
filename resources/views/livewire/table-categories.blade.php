<div class="relative overflow-x-auto">
    <x-table>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <th scope="col" class="px-6 py-3">Tipo producto</th>
            <th scope="col" class="px-6 py-3">Tipo</th>
            <th scope="col" class="px-6 py-3">Nombre</th>

            <th scope="col" class="px-6 py-3"></th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr class="bg-white border-b ">
                    <td class="px-6 py-4">{{ $item->type_product == 0 ? 'Producto' : 'Servicio' }}</td>
                    <td class="px-6 py-4">{{ $item->type_category == 0 ? 'Categoría' : 'Subcategoría' }}</td>
                    <td class="px-6 py-4">{{ $item->category_name }}</td>
                    <td class="px-6 py-4 text-end">
                        <div>
                            <a href="{{ URL('/admin/categories/edit', $item->category_id) }}"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                            font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-table>
</div>
