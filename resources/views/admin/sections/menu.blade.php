<li>
    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  group">
        <i class="fa-solid fa-chart-line text-white"></i>
        <span class="ml-3 text-white">Dashboard</span>
    </a>
</li>

<li>
    <a href="{{ URL('/admin/users') }}" class="flex items-center p-2 text-gray-900 rounded-lg  group">
        <i class="fa-solid fa-user text-white"></i>
        <span class="flex-1 ml-3 whitespace-nowrap text-white">Usuarios</span>
    </a>
</li>
<li>
    <a href="{{ URL('/admin/images') }}" class="flex items-center p-2 text-gray-900 rounded-lg  group">
        <i class="fa-solid fa-image text-white"></i>
        <span class="flex-1 ml-3 whitespace-nowrap text-white">Imagenes</span>
    </a>
</li>
<li>
    <a href="{{ URL('/admin/categories') }}" class="flex items-center p-2 text-gray-900 rounded-lg  group">
        <i class="fa-solid fa-outdent text-white"></i>
        <span class="flex-1 ml-3 whitespace-nowrap text-white">Categorías</span>
    </a>
</li>
<li>
    <a href="{{ URL('/admin/products') }}" class="flex items-center p-2 text-gray-900 rounded-lg  group">
        <i class="fa-solid fa-cash-register text-white"></i>
        <span class="flex-1 ml-3 whitespace-nowrap text-white">Productos y servicios</span>
    </a>
</li>
<li>
    <a href="{{ URL('/admin/orders') }}" class="flex items-center p-2 text-gray-900 rounded-lg  group">
        <i class="fa-solid fa-receipt text-white"></i>
        <span class="flex-1 ml-3 whitespace-nowrap text-white">Ordenes</span>
    </a>
</li>
<li>
    <a href="{{ URL('/admin/news') }}" class="flex items-center p-2 text-gray-900 rounded-lg  group">
        <i class="fa-solid fa-newspaper text-white"></i>
        <span class="flex-1 ml-3 whitespace-nowrap text-white">Noticias</span>
    </a>
</li>
<li>
    <a href="{{ URL('/admin/stopwatchs') }}" class="flex items-center p-2 text-gray-900 rounded-lg  group">
        <i class="fa-solid fa-stopwatch text-white"></i>
        <span class="flex-1 ml-3 whitespace-nowrap text-white">Cronómetros</span>
    </a>
</li>
{{-- <li>
    <a href="#"
        class="flex items-center p-2 text-gray-900 rounded-lg  group">
        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
        </svg>
        <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
    </a>
</li> --}}
<li class="border-dotted border-4 border-gray-200">
    <a href="{{ URL('/admin/logout') }}" class="flex items-center p-2 text-gray-900 rounded-lg  group">
        <i class="fa-solid fa-reply text-white"></i>
        <span class="flex-1 ml-3 whitespace-nowrap text-white">Cerrar sesión</span>
    </a>
</li>
