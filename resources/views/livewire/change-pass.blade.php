<div class="grid grid-cols-4 gap-4">
    <div class="col-span-2 col-start-2">
        <form wire:submit.prevent='actualizar'>
            @error('noRegister')
                <div class="grid grid-cols-1 gap-1 text-center">
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 text-center" role="alert">
                        {{ $message }}
                    </div>
                </div>
            @enderror
            <div class="p-6 space-y-6">
                <div class="mb-3">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Emaill</label>
                    <input type="email" id="email" wire:model.lazy="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        readonly >
                </div>
                <div class="mb-3">
                    <div class="grid grid-cols-10 gap-4">
                        <div class="col-span-8">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900">Contraseña</label>
                            <input type="{{ $type }}" id="password" wire:model.lazy='password'
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                required>
                        </div>
                        <div class="col-span-2 flex items-stretch">

                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="grid grid-cols-10 gap-4">
                        <div class="col-span-8">
                            <label for="confpassword" class="block mb-2 text-sm font-medium text-gray-900">Confirmar
                                contraseña</label>
                            <input type="{{ $type }}" id="confpassword" wire:model.lazy='confpassword'
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                required>
                        </div>
                        <div class="col-span-2 flex items-stretch">
                            <div class="self-end">
                                <button type="button" wire:click="ver"
                                    class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900
                            focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 ">{!! $icono !!}</button>
                            </div>
                        </div>
                    </div>
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
