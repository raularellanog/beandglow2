<div>
    <section class="bg-gray-50 " style="background-color: #7f1b80">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 ">
                <img src="{{ asset('/img/logotipo-beandGlow-blanco.png') }}" style="height: 150px" alt="logo">
                {{-- Be&Glow --}}
            </a>
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="grid grid-cols-1 gap-4 text-center">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                            Administrador de empresa
                        </h1>
                    </div>
                    <form class="space-y-4 md:space-y-6" wire:submit.prevent="login_form">
                        <div class="my-2">
                            <label for="email" class="block mb-2  text-gray-900 ">Tu
                                email</label>
                            <input type="email" name="email" id="email" wire:model.lazy="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                required>
                        </div>
                        <div class="my-2">
                            <label for="password"
                                class="block mb-2  text-gray-900 ">Contraseña</label>
                            <input type="password" name="password" id="password" wire:model.lazy="password"
                                placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start" style="cursor: pointer;">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 ">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 ">Recordar
                                        sesión</label>
                                </div>
                            </div>
                            {{-- <a href="#"
                                class=" text-primary-600 hover:underline dark:text-primary-500">Forgot
                                password?</a> --}}
                        </div>
                        <div class="flex items-center justify-center my-2">
                            <button type="submit"
                                class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4
                            focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2
                            ">
                                Iniciar sesión</button>
                        </div>
                        @error('noLogin')
                            <div>
                                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
                                    <span class="font-medium">{{ $message }}</span>
                                </div>
                            </div>
                        @enderror
                        {{-- <button type="button" wire:click="nuevo"
                            class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4
                            focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2
                            dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                            register</button> --}}
                        {{-- <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Don’t have an account yet? <a href="#"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                        </p> --}}
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
