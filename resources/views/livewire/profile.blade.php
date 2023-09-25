<div>
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-2 col-start-2">
            <form wire:submit.prevent='actualizar'>
                @error('noActualizce')
                    <div class="grid grid-cols-1 gap-1 text-center">
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 text-center" role="alert">
                            {{ $message }}
                        </div>
                    </div>
                @enderror
                <div class="p-6 space-y-6">
                    <div class="">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                        <input type="text" id="name" wire:model.lazy="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Teléfono</label>
                        <input type="phone" id="phone" wire:model.lazy="phone"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="5255555555" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Emaill</label>
                        <input type="email" id="email" wire:model.lazy="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="name@flowbite.com" required>
                    </div>
                    <div class="mb-3 grid grid-cols-1 gap-1">
                        <button type="submit"
                            class="focus:outline-none text-white hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm
                        px-5 py-2.5 mb-2"
                            style="background-color: rgb(126, 90, 162)">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
