<div>
    <div class="cols-span-6 hidden">
        <form wire:submit.prevent='deleteImg'>
            <input type="text" wire:model="id_image" id="id_image">
            <button type="submit" id="form_delete">Enviar</button>
        </form>
    </div>
    <div class="grid sm:grid-cols-1 md:grid-cols-10 gap-4 my-1 text-right">
        <div class="md:col-start-10">
            <button type="button" wire:click='actualizar' id="btnUpdateImages"
                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium
            rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 "><i
                    class="fa-solid fa-arrows-rotate"></i></button>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-2 my-2">
        {{ $images->links() }}
    </div>
    <div class="grid md:grid-cols-4 sm:md:grid-cols-2 gap-2 my-2">
        @foreach ($images as $item)
            <x-card-image url="{{ $item->image_path }}" id="{{ $item->image_id }}" />
        @endforeach
    </div>
    <div class="grid grid-cols-1 gap-2 my-2">
        {{ $images->links() }}
    </div>
</div>
{{--  --}}
