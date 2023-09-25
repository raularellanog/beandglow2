<div class="cursor-pointer">
    <a style="background-color:#7F1D80" href="{{ url('/shop/cart') }}"
        class="block py-2 ml-1 mr-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0  hover:font-bold"><i
            class="fa-solid fa-cart-shopping"></i>
        <span
            class="inline-flex items-center justify-center w-4 h-4 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
            {{ $contador }}
        </span>
    </a>
    <div class="hidden">
        <button class="updateCart" wire:click='actualizar'>actualizar</button>
    </div>
</div>
