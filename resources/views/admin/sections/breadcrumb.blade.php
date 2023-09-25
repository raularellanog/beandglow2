<nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
            <a href="{{ URL('/dashboard') }}"
                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 ">
                <i class="fa-solid fa-chart-line"></i>
                Dashboard
            </a>
        </li>
        @if (isset($result['breadcrumb']))
            @foreach ($result['breadcrumb'] as $item)
                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ URL($item['url']) }}"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 ">{{ $item['module'] }}</a>
                    </div>
                </li>
            @endforeach
        @endif
    </ol>
</nav>
