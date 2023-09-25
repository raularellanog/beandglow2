@extends('layout')
@section('css')
    <style>
        body {
            background-color: #7f1b80 !important;
        }
    </style>
@endsection
@section('content')
    <div class="">
        @livewire('admin.login')
    </div>
@endsection
