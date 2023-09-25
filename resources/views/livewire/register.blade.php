<div>
    <div class="flex items-start justify-between p-4 border-b rounded-t ">
        <h3 class="text-xl font-semibold text-gray-900 ">
            Registrar
        </h3>
        <button type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center "
            data-modal-hide="loginModal">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Cerrar</span>
        </button>
    </div>
    <!-- Modal body -->
    <form wire:submit.prevent='register_form'>
        @error('noRegister')
            <div class="grid grid-cols-1 gap-1 text-center">
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 text-center" role="alert">
                    {{ $message }}
                </div>
            </div>
        @enderror
        <div class="grid grid-cols-3 gap-2 mx-6 my-4">
            <div>
                <button type="button" wire:click="irLogin" class="font-medium text-blue-600  hover:underline">Iniciar
                    sesión</a>
            </div>
            <div class="col-start-3 text-end">
                <button type="button" wire:click="irForget" class="font-medium text-blue-600  hover:underline">Olvide contraseña</a>
            </div>
        </div>
        <div class="p-6 space-y-6">

            <div class="">
                <label for="re_name" class="block mb-2 text-sm font-medium text-gray-900">Nombre(s)</label>
                <input type="text" id="re_name" wire:model.lazy="re_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required>
            </div>
            <div class="">
                <label for="re_lastName" class="block mb-2 text-sm font-medium text-gray-900">Apellidos</label>
                <input type="text" id="re_lastName" wire:model.lazy="re_lastName"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required>
            </div>
            <div class="mb-3">
                <label for="re_phone" class="block mb-2 text-sm font-medium text-gray-900">Teléfono</label>
                <input type="phone" id="re_phone" wire:model.lazy="re_phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="5255555555" required>
            </div>

            <div class="mb-3">
                <label for="re_email" class="block mb-2 text-sm font-medium text-gray-900">Emaill</label>
                <input type="email" id="re_email" wire:model.lazy="re_email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="name@flowbite.com" required>
            </div>
            <div class="mb-3">
                <div class="grid grid-cols-10 gap-4">
                    <div class="col-span-8">
                        <label for="re_password" class="block mb-2 text-sm font-medium text-gray-900">Contraseña</label>
                        <input type="{{ $type }}" id="re_password" wire:model.lazy='re_password'
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
                        <label for="re_Confpassword" class="block mb-2 text-sm font-medium text-gray-900">Confirmar
                            contraseña</label>
                        <input type="{{ $type }}" id="re_Confpassword" wire:model.lazy='re_Confpassword'
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
        <div class="grid grid-cols-3 gap-2 mx-6 my-4">
            <div>
                <button type="button" wire:click="irLogin" class="font-medium text-blue-600  hover:underline">Iniciar
                    sesión</a>
            </div>
            <div class="col-start-3 text-end">
                <button type="button" wire:click="irForget" class="font-medium text-blue-600  hover:underline">Olvide contraseña</a>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center justify-center p-6 space-x-2 border-t border-gray-200 rounded-b">
            <div class="grid grid-cols-2 gap-2 mx-4">
                <div>
                    <button type="submit"
                        class="text-white  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center "
                        style="background-color:#7F1D80">Registrar</button>
                </div>
                <div class="col-start-2">
                    <div>
                        <button data-modal-hide="loginModal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
