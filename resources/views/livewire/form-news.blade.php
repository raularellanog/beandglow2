<div class="grid grid-cols-1 gap-4">
    <form wire:submit.prevent="save">
        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Titulo</label>
            <input type="text" id="title" wire:model.lazy="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                required>
        </div>
        <div class="mb-6">
            <label for="key_words" class="block mb-2 text-sm font-medium text-gray-900 ">Palabras claves</label>
            <input type="text" id="key_words" wire:model.lazy="key_words"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                required placeholder="palabra1,palabra2...">
        </div>
        <div class="mb-6">
            <label for="new_date" class="block mb-2 text-sm font-medium text-gray-900 ">Fecha</label>
            <input type="date" id="new_date" wire:model.lazy="new_date"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                required>
        </div>
        <div class="mb-6">
            <label for="main_image" class="block mb-2 text-sm font-medium text-gray-900 ">URL imagen
                principal</label>
            <input type="text" id="main_image" wire:.lazy="main_image"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                required>
        </div>
        <div class="mb-6">
            <div class="grid grid-cols-1 gap-2 text-end">
                <div>
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5
                    py-2.5 mr-2 mb-2 ">Imagenes</button>
                </div>
            </div>
        </div>
        <div class="mb-6">
            <div wire:ignore>
                <textarea wire:model="message" class="min-h-fit h-48 " name="message" id="message">{{$message}}</textarea>
            </div>
        </div>

        <div class="mb-6">
            <div class="grid grid-cols-1 gap-2">
                <button
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 "
                    type="submit">Guardar</button>
            </div>
        </div>
    </form>
    @push('scripts')
        <script>
            ClassicEditor
                .create(document.querySelector('#message'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        @this.set('message', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush
</div>
