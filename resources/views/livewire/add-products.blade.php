<div class="grid grid-cols-1 md:grid-cols-4">
    <div class="md:col-span-2 md:col-start-2">
        <form wire:submit.prevent='save'>
            <div class="mb-6">
                <label for="type" class="block mb-2 text-sm font-medium text-gray-900 ">Tipo</label>
                <select id="type" wire:model.lazy="type"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option value="1">Producto</option>
                    <option value="2">Servicio</option>
                </select>
            </div>
            <div class="mb-6">
                <label for="name"
                    class="block mb-2 text-sm font-medium text-gray-900 ">Nombre</label>
                <input type="text" id="name" wire:model.lazy="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                     block w-full p-2.5 "
                    required>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-6">
                    <label for="category_id"
                        class="block mb-2 text-sm font-medium text-gray-900 ">Categoría</label>
                    <select id="type" wire:model.lazy="category_id" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option></option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->category_id }}">{{ $item->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label for="subcategory_id"
                        class="block mb-2 text-sm font-medium text-gray-900 ">Subcategoría</label>
                    <select id="type" wire:model.lazy="subcategory_id" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option></option>
                        @foreach ($subcategories as $item)
                            <option value="{{ $item->category_id }}">{{ $item->category_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-6">
                    <label for="sku"
                        class="block mb-2 text-sm font-medium text-gray-900 ">SKU</label>
                    <input type="text" id="sku" wire:model.lazy="sku"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                    block w-full p-2.5 "
                        required>
                </div>
                <div class="mb-6">
                    <label for="stock"
                        class="block mb-2 text-sm font-medium text-gray-900 ">Stock</label>
                    <input type="text" id="stock" wire:model.lazy="stock"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                    block w-full p-2.5 "
                        required>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-6">
                    <label for="price"
                        class="block mb-2 text-sm font-medium text-gray-900 ">Precio</label>
                    <input type="text" id="price" wire:model.lazy="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                        block w-full p-2.5 "
                        required>
                </div>
                <div class="mb-6">
                    <label for="price2" class="block mb-2 text-sm font-medium text-gray-900 ">Precio
                        sin
                        descuento</label>
                    <input type="text" id="price" wire:model.lazy="price2"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                        block w-full p-2.5 "
                        required>
                </div>
            </div>
            <div class="mb-6">
                <label for="key_word" class="block mb-2 text-sm font-medium text-gray-900 ">Palabras
                    claves</label>
                <input type="text" id="key_word" wire:model.lazy="key_word"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                     block w-full p-2.5 0"
                    placeholder="palabra1, palabra2 ..." required>
            </div>
            <div class="mb-6">
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 ">Descripción</label>
                <textarea id="description" rows="4" wire:model.lazy='description'
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500
focus:border-blue-500 "></textarea>
            </div>
            <div class="grid grid-cols-1 gap-2">
                <button type="submit"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg
                text-sm px-5 py-2.5 mr-2 mb-2 ">Guardar</button>
            </div>
        </form>
    </div>
</div>
