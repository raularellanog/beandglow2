<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Be&Glow|Admin</title>
    <link href="https://fonts.cdnfonts.com/css/glacial-indifference-2" rel="stylesheet">
    @include('include.csslibs')
    @include('include.css')
    <style>
        @import url('https://fonts.cdnfonts.com/css/glacial-indifference-2');

        body {
            font-family: 'Glacial Indifference', sans-serif;
        }
    </style>

    @yield('css')
</head>

<body>
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50" style="background-color: #7f1d80">
            <a href="/" class="flex items-center pl-2.5 mb-5">
                <img src="{{ asset('/img/logotipo-beandGlow-blanco.png') }}" class="" alt=">Be&Glow" />
                {{-- <span class="self-center text-xl font-semibold whitespace-nowrap">Be&Glow</span> --}}
            </a>
            <ul class="space-y-2 font-medium">
                @include('admin.sections.menu')
            </ul>
        </div>
    </aside>

    <div class="p-2 sm:ml-64">
        <div class="p-2 border-2 border-gray-200 border-dashed rounded-lg  mb-2">
            @include('admin.sections.breadcrumb')
        </div>
        <div class="p-2 border-2 border-gray-200 border-dashed rounded-lg ">
            @if (isset($result['title']))
                <div class="grid grid-cols-1 md:grid-cols-1 text-center">
                    <h2 class="text-lg font-medium ">{{ $result['title'] }}</h2>
                </div>
            @endif
            @yield('content')
        </div>
    </div>
    @include('include.jslibs')
    @include('include.script')
    @yield('js')
    @stack('scripts')
</body>

</html>
