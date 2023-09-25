@extends('admin.layout')
@section('content')
    <div class="grid md:grid-cols-8 sm:grid-cols-1 my-2">
        <div class="md:col-start-8 text-end">
            <a href="{{ URL('/admin/news/add') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg
            text-sm px-5 py-2.5 mr-2 mb-2">Agregar</a>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-1">
        @livewire('table-news')
    </div>
@endsection
