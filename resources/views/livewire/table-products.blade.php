<div>
    <div class="grid grid-cols-3 md:grid-cols-1 my-4">
        <div class="col-start-3">

        </div>
    </div>
    <x-table>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <th scope="col" class="px-6 py-3">Producto</th>
            <th scope="col" class="px-6 py-3">Precio</th>
            <th scope="col" class="px-6 py-3">Stock</th>
            <th scope="col" class="px-6 py-3">SKU</th>
            <th scope="col" class="px-6 py-3">Tipo</th>
            <th scope="col" class="px-6 py-3">Actualización</th>
            <th scope="col" class="px-6 py-3"></th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr class="bg-white border-b ">
                    <td class="px-6 py-4">{{ $item->product_name }}</td>
                    <td class="px-6 py-4">${{ $item->product_price }}</td>
                    <td class="px-6 py-4">{{ $item->product_stock }}</td>
                    <td class="px-6 py-4">{{ $item->product_sku }}</td>
                    <td class="px-6 py-4">
                        <x-type-product type="{{ $item->product_type }}" />
                    </td>
                    <td class="px-6 py-4">{{ $item->updated_at }}</td>
                    <td class="px-6 py-4">
                        <div>
                            <a href="{{ URL('/admin/products/edit', $item->product_id) }}"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                            font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2  focus:outline-none"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </x-table>
    <div class="grid grid-cols-1 gap-2 my-2">
        {{ $data->links() }}
    </div>
</div>
