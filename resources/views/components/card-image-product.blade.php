<div class="p-1 bg-white border border-gray-200 rounded-lg shadow">
    <div class="grid grid-cols-1 gap-2 text-center imgCenter" style="background-color:#E5E8E8;height: 200px;">
        <img src="{{ $url }}" class="p-1 tex-center" loading="lazy" alt="image-{{ $number }}"
            style="max-width: 100%; max-height: 100%">
    </div>
    <div class="grid grid-cols-3 gap-2 tex-center mt-2">
        <div class="text-start">
            <button type="button"
                class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium
            rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2  delete_img"
                data-number="{{ $number }}"><i class="fa-solid fa-trash"></i></button>
        </div>
        <div class="text-center">
            <strong>#</strong> {{ $number }}
        </div>
        <div class="text-end">
            <button type="button" wire:click="editar({{ $number }})"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium
            rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 "><i
                    class="fa-solid fa-pen-to-square"></i></button>
        </div>
    </div>
</div>
