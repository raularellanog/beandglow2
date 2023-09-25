@extends('admin.layout')
@section('content')
    
    <div class="grid sm:grid-cols-1 md:grid-cols-6 gap-4">
        <div class=" md:col-span-4 md:col-start-2">
            @livewire('form-stopwatch', ['stopwatch_id' => null])
        </div>
    </div>
@endsection
