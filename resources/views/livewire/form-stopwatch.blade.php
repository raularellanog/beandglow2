<div class="grid grid-cols-1 gap-4 ">
    <form wire:submit.prevent='save'>
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre</label>
            <input type="text" id="name" wire:model.lazy="stopwatch_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                block w-full p-2.5 "
                required>
        </div>
        <div class="mb-6">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Texto</label>
            <input type="text" id="text" wire:model.lazy="stopwatch_text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                block w-full p-2.5 ">
        </div>
        <div class="grid grid-cols-2 gap-4 ">
            <div class="mb-6">
                <label for="start" class="block mb-2 text-sm font-medium text-gray-900 ">Fecha de
                    inicio</label>
                <input type="datetime-local" id="start" wire:model.lazy="stopwatch_start"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                    block w-full p-2.5 "
                    required>
            </div>
            <div class="mb-6">
                <label for="end" class="block mb-2 text-sm font-medium text-gray-900 ">Fecha de
                    fin</label>
                <input type="datetime-local" id="end" wire:model.lazy="stopwatch_end"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                    block w-full p-2.5 "
                    required>
            </div>
        </div>
        <div class="mb-6">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Estatus</label>
            <select id="status" wire:model.lazy="stopwatch_status"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                required>
                <option value="A" selected>Activo</option>
                <option value="I">Inactivo</option>
                <option value="E">Eliminar</option>
            </select>
        </div>
        <div class="mb-6">
            <div class="grid grid-cols-1 gap-4 ">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Guardar</button>
            </div>
        </div>
    </form>
</div>
