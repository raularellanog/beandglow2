@extends('admin.layout')
@section('content')
    <div class="grid grid-cols-1 gap-4 my-4 text-end">
        <div>
            <a href="{{ URL('/admin/stopwatchs/add') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
            font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700
            focus:outline-none dark:focus:ring-blue-800"><i
                    class="fa-solid fa-plus"></i> Agregar</a>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-4">
        @livewire('table-stopwatch')
    </div>
@endsection
