@extends('admin.layout')
@section('content')
    
    <div class="grid md:grid-cols-6 sm:grid-cols-1">
        <div class="md:col-span-4 md:col-start-2">
            @livewire('form-news', ['new_id' => $id])
        </div>
    </div>
@endsection
@section('js')
@endsection
