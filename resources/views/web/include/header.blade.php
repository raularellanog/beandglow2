<nav class="bg-white  py-1" style="background-color:#7F1D80">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center m-0 p-0">
            <img src="{{ asset('img/Logotipo-BeandGlow-blanco1.png') }}" class="m-0 p-0" style="height: 50px"
                alt="Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Be&Glow</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default" style="background-color:#7F1D80">
            <ul style="background-color:#7F1D80"
                class="font-medium flex flex-col p-2 md:p-0 mt-4  md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white ">
                <li style="background-color:#7F1D80">
                    <a href="/" style="background-color:#7F1D80"
                        class="block py-2 ml-1 mr-2 text-white rounded md:bg-transparent  md:p-0  hover:font-bold">Home</a>
                </li>
                <li style="background-color:#7F1D80">
                    <a href="{{ URL('/') }}#servicios" style="background-color:#7F1D80"
                        class="block py-2 ml-1 mr-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0  hover:font-bold">Servicios</a>
                </li>
                <li style="background-color:#7F1D80">
                    <a href="{{ URL('/shop') }}" style="background-color:#7F1D80"
                        class="block py-2 ml-1 mr-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0  hover:font-bold ">Productos</a>
                </li>
                <li style="background-color:#7F1D80">
                    <a href="{{ URL('/about') }}" style="background-color:#7F1D80"
                        class="block py-2 ml-1 mr-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 hover:font-bold">Nosotros</a>
                </li>
                <li style="background-color:#7F1D80">
                    <a href="#contacto" style="background-color:#7F1D80"
                        class="block py-2 ml-1 mr-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 hover:font-bold">Contacto</a>
                </li>
                <li style="background-color:#7F1D80">
                    @if (session('login') == false)
                        <button type="button" data-modal-target="loginModal" data-modal-toggle="loginModal"
                            style="background-color:#7F1D80"
                            class="block py-2 ml-1 mr-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0  hover:font-bold"><i
                                class="fa-solid fa-heart"></i></button>
                    @else
                        @livewire('btn-fav')
                    @endif
                </li>

                <li style="background-color:#7F1D80">
                    @if (session('login') == false)
                        <button type="button" data-modal-target="loginModal" data-modal-toggle="loginModal"
                            style="background-color:#7F1D80"
                            class="block py-2 ml-1 mr-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0  hover:font-bold"><i
                                class="fa-solid fa-cart-shopping"></i></button>
                    @else
                        @livewire('btn-cart')
                    @endif
                </li>
                <li style="background-color:#7F1D80">
                    @if (session('login') == false)
                        <button type="button" data-modal-target="loginModal" data-modal-toggle="loginModal"
                            data-tooltip-target="tooltip-login" style="background-color:#7F1D80"
                            class="block py-2 ml-1 mr-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0  hover:font-bold"><i
                                class="fa-solid fa-user fa-bounce"></i></button>
                        <div id="tooltip-login" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                            Cerrar sesión
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    @else
                        {{-- <a href="{{ url('/logout') }}" style="background-color:#7F1D80"
                            data-tooltip-target="tooltip-logout"
                            class="block py-2 ml-1 mr-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0  hover:font-bold"><i
                                class="fa-solid fa-right-from-bracket"></i></a>
                        <div id="tooltip-logout" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                            Cerrar sesión
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div> --}}

                        <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
                            class="inline-flex items-center text-sm font-medium text-center text-white hover:text-white-900
                             focus:outline-none"
                            style="font-size: 16px" type="button">
                            <i class="fa-solid fa-user"></i>
                            <div class="relative flex">
                                <div
                                    class="relative inline-flex w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-2 right-7">
                                </div>
                            </div>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNotification"
                            class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow"
                            aria-labelledby="dropdownNotificationButton">
                            <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 ">
                                Opciones
                            </div>
                            <div class="divide-y divide-gray-100 justify-center">
                                <a href="{{ URL('/shop/profile') }}"
                                    class="flex px-4 py-3 hover:bg-gray-100 text-center ">
                                    <div class="flex-shrink-0">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div class="w-full pl-3">
                                        Perfil
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 text-center">
                                    <div class="flex-shrink-0">
                                        <i class="fa-solid fa-cart-arrow-down"></i>
                                    </div>
                                    <div class="w-full pl-3">
                                        Ordenes
                                    </div>
                                </a>
                                <a href="{{ url('/logout') }}" class="flex px-4 py-3 hover:bg-gray-100 text-center">
                                    <div class="flex-shrink-0">
                                        <i class="fa-regular fa-circle-xmark"></i>
                                    </div>
                                    <div class="w-full pl-3">
                                        Cerrar sesión
                                    </div>
                                </a>
                                {{-- <a href="#" class="flex px-4 py-3 hover:bg-gray-100 text-center">
                                    <div class="flex-shrink-0">

                                    </div>
                                    <div class="w-full pl-3">

                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100">
                                    <div class="flex-shrink-0">

                                    </div>
                                    <div class="w-full pl-3">

                                    </div>
                                </a> --}}
                            </div>
                        </div>
                    @endif

                </li>

            </ul>
        </div>
    </div>
</nav>
