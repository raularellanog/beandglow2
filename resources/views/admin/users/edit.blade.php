@extends('admin.layout')
@section('content')
    <div class="grid grid-cols-1 gap-4">
        @livewire('user-edit', ['user_id' => $id])
    </div>
@endsection
