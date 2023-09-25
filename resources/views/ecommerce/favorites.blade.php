@extends('web.layout')
@section('content')
    @include('include.breadcrumb')
    <div class="container mx-auto">
        @livewire('view-fav')
    </div>
@endsection
