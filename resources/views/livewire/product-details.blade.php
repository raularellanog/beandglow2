<div>
    <div class="container mx-auto mt-4">
        <div class="grid grid-cols-3 gap-2 ">
            <div class="col-span-2">
                <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-96 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        @foreach ($image as $key => $item)
                            @if ($key == 0)
                                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                    <img src="{{ $item->image_product_url }}"
                                        class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="..." style="object-fit: contain;">
                                </div>
                            @else
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ $item->image_product_url }}"
                                        class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="..." style="object-fit: contain;">
                                </div>
                            @endif
                        @endforeach

                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                        @foreach ($image as $key => $item)
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                aria-label="Slide {{ $key }}"
                                data-carousel-slide-to="{{ $key }}"></button>
                        @endforeach
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-dark/30  group-focus:ring-4 group-focus:ring-dark  group-focus:outline-none">
                            <svg class="w-4 h-4 text-dark" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-dark/30 group-focus:ring-4 group-focus:ring-dark group-focus:outline-none">
                            <svg class="w-4 h-4 text-dark " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>

            <div class="p-6 bg-white border border-gray-200 rounded-lg shadow ">
                <a href="#" class="text-center my-4">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                        {{ $product->product_name }}
                    </h5>
                </a>
                <p class="mt-4 mb-3 font-normal text-gray-700 ">
                </p>
                <div class="grid grid-cols-2 gap-2 mt-4">
                    <div>
                        <p><span class="font-bold">SKU: </span>{{ $product->product_sku }}</p>
                    </div>
                    <div>
                        <p>Disponible: <span class="font-bold text-xl">{{ $product->product_stock }}</span></p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 mt-4">
                    <div>
                        <p>Precio sin descuento:</p>
                        <p style="text-decoration: line-through;text-decoration-color: red;">
                            ${{ $product->product_price2 }}
                        </p>
                    </div>
                    <div>
                        <p>Precio:</p>
                        <p class="text-2xl font-bold">${{ $product->product_price }} MXN</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 mt-8">
                    @if (session('login') != false)
                        <div class="grid grid-cols-1">
                            <button type="button" wire:click='addFav({{ $product->product_id }})'
                                class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none
                    focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Favoritos
                                <i class="fa-solid fa-heart"></i></button>
                        </div>
                        <div class="grid grid-cols-1 ">
                            <button type="button" wire:click='addCart({{ $product->product_id }})'
                                class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4
                    focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Agrear al carrito
                                <i class="fa-solid fa-cart-arrow-down"></i></button>
                        </div>
                    @else
                        <div class="grid grid-cols-1">
                            <button type="button" data-modal-target="loginModal" data-modal-toggle="loginModal"
                                class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none
                        focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Favoritos
                                <i class="fa-solid fa-heart"></i></button>
                        </div>
                        <div class="grid grid-cols-1 ">
                            <button type="button" data-modal-target="loginModal" data-modal-toggle="loginModal"
                                class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4
                        focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Comprar
                                <i class="fa-solid fa-cart-arrow-down"></i></button>
                        </div>
                    @endif

                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-2 mt-4">
            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow ">
                @livewire('comments', ['product_id' => $product->product_id])
            </div>
            <div>
                <div class="mb-4 border-b border-gray-200">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                        data-tabs-toggle="#myTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="description-tab"
                                data-tabs-target="#description" type="button" role="tab"
                                aria-controls="description" aria-selected="false">Descripción</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                                id="caracteristicas-tab" data-tabs-target="#caracteristicas" type="button"
                                role="tab" aria-controls="caracteristicas"
                                aria-selected="false">Características</button>
                        </li>
                    </ul>
                </div>
                <div id="myTabContent">
                    <div class="hidden p-4 rounded-lg bg-gray-50 " id="description" role="tabpanel"
                        aria-labelledby="description-tab">
                        <p class="text-sm text-gray-500 ">
                            {{ $product->product_description }}
                        </p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 " id="caracteristicas" role="tabpanel"
                        aria-labelledby="caracteristicas-tab">
                        <p class="text-sm text-gray-500 ">

                        </p>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>
