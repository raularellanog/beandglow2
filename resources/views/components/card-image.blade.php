<div class="p-1 bg-white border border-gray-200 rounded-lg shadow ">
    <div class="grid grid-cols-1 gap-2 text-center imgCenter" style="background-color:#E5E8E8;height: 200px;">
        <img src="{{ asset($url) }}" class="p-1 tex-center" loading="lazy" alt="image-{{ $id }}"
            style="max-width: 100%; max-height: 100%">
    </div>
    <div class="grid grid-cols-1 gap-2 tex-center my-1">
        <a href="{{ asset($url) }}" target="_blank" style="font-size: 8px">{{ asset($url) }}</a>
    </div>
    <div class="grid grid-cols-2 gap-2 tex-center mt-2">
        <div class="text-center">
            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg copy_img
                text-sm px-5 py-2.5 mr-2 mb-2 d"
                data-url="{{ asset($url) }}">Copiar</button>
        </div>
        <div class="text-center">
            <button type="button"
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5
                py-2.5 mr-2 mb-2  delete_img"
                data-id="{{ $id }}">Eliminar</button>
        </div>
    </div>
</div>
