<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Be&Glow</title>
    @include('include.csslibs')
    @include('include.css')
    <style>
        html {
            scroll-behavior: smooth;
            /*Comenta la línea (o dale el valor 'auto' a scroll behavior )
       para probar la diferencia con y sin scroll suavizado*/
        }
    </style>
    @yield('css')
</head>

<body class="bg-slate-100 font-sans">
    <div style="width: 100%">
        @livewire('clock-sale')
    </div>
    @include('web.include.header')
    {{-- <div class="container mx-auto mb-2"> --}}
    <div class="mb-2" style="min-height: 90vh">
        @yield('content')
    </div>
    <div class="py-2" style="height: 100px;background-color: #7F1D80">
        <div class="container mx-auto mt-2">
            <div class="grid grid-cols-4 gap-1 mt-2">
                <div class="col-start-2 col-span-2">
                    @livewire('subscription')
                </div>
            </div>
        </div>
    </div>
    <!-- Main modal -->
    <div id="loginModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                @livewire('login-register')
            </div>
        </div>
    </div>

    @include('include.jslibs')
    @include('include.script')
    @yield('js')
    @stack('scripts')

</body>

</html>
