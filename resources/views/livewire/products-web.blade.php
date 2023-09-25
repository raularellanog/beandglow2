<div class="container mx-auto">
    <div class="grid grid-cols-1 gap-4 my-4 text-center">
        <form>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 00"
                    placeholder="buscar producto, servicio..." required>
                <button type="submit"
                    class="text-white absolute right-2.5 bottom-2.5  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 "  style="background-color: rgb(126, 90, 162)">Buscar</button>
            </div>
        </form>
    </div>
    <div class="grid grid-cols-1 gap-4 my-4 text-center">
        <div class="inline-flex rounded-md shadow-sm" role="group">
            @foreach ($categories as $key => $item)
                @if ($key == 0)
                    <button type="button"
                        class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                        {{ $item->category_name }}
                    </button>
                @endif
                @if ($key > 0)
                    <button type="button"
                        class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                        {{ $item->category_name }}
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="grid grid-cols-4 gap-2 my-4 text-center ">
        @foreach ($data as $item)
            <div>
                <x-card-product product="{{ $item->product_id }}" name="{{ $item->product_name }}"
                    price="{{ $item->product_price }}" slug="{{ $item->product_name_slug }}"
                    priceNo="{{ $item->product_price2 }}" clase="{{ $item->category_slug }}" />
            </div>
        @endforeach
    </div>
</div>
