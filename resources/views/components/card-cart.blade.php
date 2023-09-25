<div class="">
    <div class=" all">
        <div class="w-full bg-white border border-gray-200  shadow  ">
            <div class="w-full" style="border-bottom-style: solid;border-bottom-width: 1px;border-color:#E5E8E8;">
                <a href="{{ URL('/shop/details', $slug) }}" class="flex justify-center text-center " style="width: 100%">
                    <img class=" " src="{{ $image }}" alt="image {{ $name }}"
                        style="max-height:200px;object-fit: cover;" />
                </a>
            </div>
            <div class="px-5 pb-2">
                <div class="my-2">
                    <a href="{{ URL('/shop/details', $slug) }}">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 ">{{ $name }}</h5>
                    </a>
                </div>
                <div class="flex items-center justify-between">
                    <div style="border-right-style: solid;border-right-width: 1px;border-color:#E5E8E8;" class="pr-2">
                        @if ($priceNo > 0)
                            <p>
                                <span class="text-xs"
                                    style="text-decoration: line-through;text-decoration-color: red;">${{ $priceNo }}
                                    MXN</span>
                            </p>
                        @endif
                        <p>
                            <span class="text-xl font-bold text-gray-900">${{ $price }} MXN</span>
                        </p>
                    </div>
                    <div class="p-0 m-0">
                        <a href="{{ URL('/shop/details', $slug) }}"
                            class="text-white  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium
                            text-sm px-5 py-2.5 text-center rounded-lg " style="background-color: rgb(126, 90, 162)">Ver
                            producto</a>

                    </div>
                </div>
            </div>
            <div class="p-2 grid grid-cols-4 gap-1">
                <div class="border-2 border-inherit  grid grid-cols-1">
                    <button type="button" wire:click='reducir({{ $product }})'
                        class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200
                        font-medium rounded-full font-bold">-</button>
                </div>
                <div class="border-2 border-inherit grid grid-cols-1 text-center">
                    {{ $quantity }}
                </div>
                <div class="border-2 border-inherit grid grid-cols-1">
                    <button type="button" wire:click='incrementar({{ $product }})'
                        class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200
                    font-medium rounded-full font-bold">+</button>
                </div>
                <div class="border-2 border-inherit grid grid-cols-1">
                    <button type="button" wire:click='eliminar({{ $product }})'
                        class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg
                    text-sm"><i
                            class="fa-solid fa-trash"></i></button>
                </div>
            </div>
        </div>
    </div>

</div>
