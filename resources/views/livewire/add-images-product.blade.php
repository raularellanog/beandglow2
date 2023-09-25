 <div class="grid grid-cols-1 gap-4">
     <div class="grid grid-cols-1 md:grid-cols-6 sm:grid-cols-1 gap-4">
         <div class="col-span-6 md:col-span-4 md:col-start-2 text-center">
             <h2><strong>Producto:</strong> {{ $data->product_name }}</h2>
         </div>
         <div class="col-span-6 grid grid-rows-1 grid-flow-col md:col-span-4 md:col-start-2">
             <div
                 class="block p-2 bg-white border border-gray-200 rounded-lg shadow
            hover:bg-gray-100 ">
                 <form wire:submit.prevent="saveImg">

                     <div class="grid sm:grid-cols-2 md:grid-cols-6 gap-4">
                         <div class="md:col-span-3 sm:col-span-2 mb-6">
                             <label for="url"
                                 class="block mb-2 text-sm font-medium text-gray-900 ">URL</label>
                             <input type="text" id="url" wire:model.lazy="url"
                                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full
                            p-2.5 "
                                 required>
                         </div>
                         <div class="col-span-2 mb-6">
                             <label for="countries"
                                 class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Orden</label>
                             <select id="countries" wire:model.lazy="orden"
                                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                            ">
                                 @for ($i = 1; $i <= $max; $i++)
                                     <option value="{{ $i }}">{{ $i }}</option>
                                 @endfor
                             </select>
                         </div>
                         <div class="col-span-1 flex items-stretch ">
                             <div class="grid grid-cols-1 self-center">
                                 <button type="submit"
                                     class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm
                            px-5 py-2.5 mr-2 mb-2"><i
                                         class="fa-solid fa-plus"></i>
                                     Agregar</button>
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
         <div class="col-span-6 grid grid-rows-1 grid-flow-col md:col-span-4 md:col-start-2">
             <div
                 class="block p-2 bg-white border border-gray-200 rounded-lg shadow
            hover:bg-gray-100 ">
                 <form wire:submit.prevent="saveEdit">
                     <div class="grid grid-cols-1 gap-4 my-2 text-center">
                         Editar orden
                     </div>
                     <div class="grid sm:grid-cols-2 md:grid-cols-6 gap-4">
                         <div class="md:col-span-3 sm:col-span-2 mb-6">
                             <label for="url"
                                 class="block mb-2 text-sm font-medium text-gray-900 ">URL</label>
                             <input type="text" id="url" wire:model.lazy="update_url"
                                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full
                            p-2.5 "
                                 readonly>
                         </div>
                         <div class="col-span-2 mb-6">
                             <label for="countries"
                                 class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Orden</label>
                             <select id="countries" wire:model.lazy="update_order"
                                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                            ">
                                 @for ($i = 1; $i <= $max; $i++)
                                     <option value="{{ $i }}">{{ $i }}</option>
                                 @endfor
                             </select>
                         </div>
                         <div class="col-span-1 flex items-stretch ">
                             <div class="grid grid-cols-1 self-center">
                                 @if ($update_id > 0)
                                     <button type="submit"
                                         class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm
                            px-5 py-2.5 mr-2 mb-2 ">Editar</button>
                                 @endif
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
         <div class="col-span-6 grid grid-rows-1 grid-flow-col md:col-span-6">
             <div class="grid grid-cols-2 gap-2 my-2">
                 <div class="text-start">
                     <button type="button"
                         class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300
                font-medium rounded-lg text-sm px-5 py-2.5 mb-2 ">Imagenes</button>
                 </div>
                 <div class="text-end">
                     <button type="button" wire:click="actualizar"
                         class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5
        py-2.5 mr-2 mb-2 ">Actualizar
                         página <i class="fa-solid fa-rotate"></i></button>
                 </div>
             </div>

         </div>
         <div class="col-span-6">
             <div class="grid md:grid-cols-4 sm:md:grid-cols-2 gap-2 my-2">
                 @if (isset($images))
                     @foreach ($images as $item)
                         <x-card-image-product url="{{ $item->image_product_url }}"
                             number="{{ $item->image_product_order }}"
                             image_product_id="{{ $item->image_product_id }}" />
                     @endforeach
                 @endif
             </div>
         </div>
         <div class="cols-span-6 hidden">
             <form wire:submit.prevent='deleteImg'>
                 <input type="text" wire:model="number_delete" id="number_delete">
                 <button type="submit" id="form_delete">Enviar</button>
             </form>
         </div>
     </div>
 </div>
