<div class="container mx-auto">
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="grid grid-cols-4 gap-2">
        <div class="col-span-2 grid grid-cols-2 gap-2">
            @foreach ($products as $item)
                <x-card-cart product="{{ $item->product_id }}" price="{{ $item->product_price }}"
                    name="{{ $item->product_name }}" quantity="{{ $item->quantity }}" slug="{{$item->product_name_slug}}" />
            @endforeach
            @if (count($products) == 0)
                <div class="grid grid-cols-1 gap-1 my-4">
                    <div class="text-center">
                        <h2 class="text-2xl font-bold">Sin productos</h2>
                    </div>
                </div>
            @endif
        </div>
        <div class="col-start-4 grid grid-cols-1 max-h-96 gap-1 block p-4 bg-white border border-gray-200 rounded-lg shadow ">
            <div class="grid grid-cols-1 gap-1 my-4">
                <div class="text-center">
                    <h2 class="text-xl font-bold ">Resumen de tu pedido</h2>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-2">
                <div class="">
                    <p class="font-bold">Subtotal:</p>
                </div>
                <div class="text-end">
                    ${{ $sub }} MXN
                </div>
            </div>
            <div class="grid grid-cols-2 gap-2">
                <div class="">
                    <p class="font-bold">Envío:</p>
                </div>
                <div class="text-end">
                    ${{ $ship }} MXN
                </div>
            </div>
            <div class="grid grid-cols-2 gap-2 text-xl my-4">
                <div class="">
                    <p class="font-bold">Total:</p>
                </div>
                <div class="text-end">
                    ${{ $total }} MXN
                </div>
            </div>
            <div class="grid grid-cols-1 gap-2 mt-4">
                <button type="button"
                    class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm
                px-5 py-2.5 mb-2 ">Procesar
                    Compra</button>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('img/compra-segura.png') }}" alt="compra segura" style="height: 100px">
            </div>
        </div>
    </div>
</div>
