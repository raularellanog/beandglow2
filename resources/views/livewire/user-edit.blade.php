<div class="grid md:grid-cols-9  sm:grid-cols-1 gap-4 mt-5">
    <div class="md:col-span-5 md:col-start-3">
        <form wire:submit.prevent='save_data'>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="floating_nombre" id="floating_nombre" wire:model.lazy='name'
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none peer"
                    placeholder=" " required />
                <label for="floating_nombre"
                    class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]
                    peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                    peer-focus:scale-75 peer-focus:-translate-y-6">Nombre</label>
                @error('name')
                    <x-alert>{{ $message }}</x-alert>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="email" name="floating_email" id="floating_email" wire:model.lazy='email'
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " autocomplete="off" />
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]
                    peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                    peer-focus:scale-75 peer-focus:-translate-y-6">Correo
                    electronico</label>
                @error('email')
                    <x-alert>{{ $message }}</x-alert>
                @enderror
            </div>
            <div class="grid grid-cols-8 gap-4">
                <div class="col-span-4">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="{{ $type }}" name="repeat_password" id="floating_repeat_password"
                            wire:model.lazy='pass'
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required autocomplete="false" />
                        <label for="floating_repeat_password"
                            class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]
                            peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                            peer-focus:scale-75 peer-focus:-translate-y-6">Cambiar
                            contraseña</label>
                    </div>
                </div>
                <div class="">
                    <button type="button" wire:click='change_pass'
                        class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">{!! $icono !!}</button>
                </div>
                <div class="col-span-3 text-end">
                    <button type="button" wire:click='generate_pass'
                        class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2
                        ">Generar
                        contraseña</button>
                </div>

            </div>
            <div class="grid grid-cols-4 gap-4">
                <div class="col-span-2">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full
                        sm:w-auto px-5 py-2.5 text-center">Guardar
                        datos</button>
                </div>
                <div class="col-span-2 text-end">
                    <button type="button" wire:click="save_pass"
                        class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5
                    text-center mr-2 mb-2 ">Cambiar
                        contraseña</button>
                </div>
            </div>
        </form>

    </div>
</div>
