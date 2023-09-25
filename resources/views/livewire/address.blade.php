<div class="grid grid-cols-4 gap-4">
    <div class="col-span-2 col-start-2">
        <form wire:submit.prevent='add_form'>
            @error('noRegister')
                <div class="grid grid-cols-1 gap-1 text-center">
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 text-center" role="alert">
                        {{ $message }}
                    </div>
                </div>
            @enderror
            <div class="p-6 space-y-6">
                <div class="mb-3">
                    <label for="address_name" class="block mb-2 text-sm font-medium text-gray-900">Nombre de dirección</label>
                    <input type="text" id="address_name" wire:model.lazy="address_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        required>
                </div>

                <div class="mb-3">
                    <label for="address_street" class="block mb-2 text-sm font-medium text-gray-900">Calle</label>
                    <input type="text" id="address_street" wire:model.lazy="address_street"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        required>
                </div>

                <div class="mb-3 grid grid-cols-2 gap-2">
                    <div class="">
                        <label for="address_noe" class="block mb-2 text-sm font-medium text-gray-900">No Exterior</label>
                        <input type="text" id="address_noe" wire:model.lazy="address_noe"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>
                    <div class="">
                        <label for="address_noi" class="block mb-2 text-sm font-medium text-gray-900">No Interior</label>
                        <input type="text" id="address_noi" wire:model.lazy="address_noi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address_cp" class="block mb-2 text-sm font-medium text-gray-900">Código postal</label>
                    <input type="text" id="address_cp" wire:model.lazy="address_cp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        required>
                </div>

                <div class="mb-3">
                    <label for="address_suburb" class="block mb-2 text-sm font-medium text-gray-900">Colonia</label>
                    <input type="text" id="address_suburb" wire:model.lazy="address_suburb"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        required>
                </div>
                <div class="mb-3">
                    <label for="address_state" class="block mb-2 text-sm font-medium text-gray-900">Estado</label>
                    <input type="text" id="address_state" wire:model.lazy="address_state"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        required>
                </div>
                <div class="mb-3">
                    <label for="address_town" class="block mb-2 text-sm font-medium text-gray-900">Municipio o
                        alcaldia</label>
                    <input type="text" id="address_town" wire:model.lazy="address_town"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        required>
                </div>
                <div class="mb-3">
                    <label for="address_reference" class="block mb-2 text-sm font-medium text-gray-900">Referencia</label>
                    <input type="text" id="address_reference" wire:model.lazy="address_reference"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        required>
                </div>

            </div>
            <div class="mb-3 grid grid-cols-1 gap-1">
                <button type="submit"
                    class="focus:outline-none text-white hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm
                px-5 py-2.5 mb-2"
                    style="background-color: rgb(126, 90, 162)">Actualizar</button>
            </div>
        </form>
    </div>
</div>
