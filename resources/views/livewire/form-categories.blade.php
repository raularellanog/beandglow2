<div>
    <form wire:submit.prevent='save'>
        <div class="mb-4">
            <label for="type_product" class="block mb-2 text-sm font-medium text-gray-900 ">Tipo de
                producto</label>
            <select id="type_product" wire:model.lazy="type_product"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="0">Producto</option>
                <option value="1">Servicio</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="type_category" class="block mb-2 text-sm font-medium text-gray-900 ">Tipo</label>
            <select id="type_category" wire:model.lazy='type_category'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <option></option>
                <option value="0">Categoría</option>
                @if ($count_categories > 0)
                    <option value="1">Subcategoría</option>
                @endif
            </select>
        </div>
        @if ($type_category != null || $type_category == 0)
            @if ($type_category == 1)
                <div class="mb-4">
                    <label for="countries"
                        class="block mb-2 text-sm font-medium text-gray-900 ">Categoría principal</label>
                    <select id="countries" wire:model.lazy='main_category' required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option></option>
                        @if (count($categories))
                            @foreach ($categories as $item)
                                <option value="{{ $item->category_id }}">{{ $item->category_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            @endif
            <div class="mb-4">
                <label for="name"
                    class="block mb-2 text-sm font-medium text-gray-900 ">Nombre</label>
                <input type="text" id="name" wire:model.lazy='category_name'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required>
            </div>
            <div class="mb-4">
                <div class="grid grid-cols-1 gap-4">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium
                    rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Guardar</button>
                </div>
            </div>
        @endif
    </form>
</div>
