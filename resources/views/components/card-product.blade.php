<div class="{{ $clase }} all">
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
            <div class="flex items-center py-2"
                style="border-bottom-style: solid;border-bottom-width: 1px;border-color:#E5E8E8;">
                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-gray-200 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded  ml-3">5.0</span>
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
                        class="text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium
                        text-sm px-5 py-2.5 text-center rounded-lg"  style="background-color: rgb(126, 90, 162)">Ver
                        producto</a>

                </div>
            </div>
        </div>

    </div>
</div>
