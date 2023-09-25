@extends('web.layout')
@section('content')
    @include('include.breadcrumb')
    <div class="grid grid-cols-1 gap-2">
        @livewire('product-details', ['product_id' => $product->product_id])
    </div>
@endsection
