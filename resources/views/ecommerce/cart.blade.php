@extends('web.layout')
@section('content')
    @include('include.breadcrumb')
    <div class="grid grid-cols-1 gap-2">
        @livewire('view-cart')
    </div>
@endsection
