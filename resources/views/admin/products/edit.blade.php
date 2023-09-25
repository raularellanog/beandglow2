@extends('admin.layout')
@section('content')
   
    <div class="grid grid-cols-1 md:grid-cols-1">

        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent"
                role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="product-tab" data-tabs-target="#product"
                        type="button" role="tab" aria-controls="product" aria-selected="false">Producto</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="images-tab" data-tabs-target="#images" type="button" role="tab" aria-controls="images"
                        aria-selected="false">Imagenes</button>
                </li>
                {{-- <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                        aria-controls="settings" aria-selected="false">Settings</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">Contacts</button>
                </li> --}}
            </ul>
        </div>
        <div id="myTabContent">
            <div class="hidden p-4 rounded-lg" id="product" role="tabpanel" aria-labelledby="product-tab">
                @livewire('add-products', ['product_id' => $id])
            </div>
            <div class="hidden p-4 rounded-lg" id="images" role="tabpanel" aria-labelledby="images-tab">
                @livewire('add-images-product', ['product_id' => $id])
            </div>
            <div class="hidden p-4 rounded-lg" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>.
                </p>
            </div>
            <div class="hidden p-4 rounded-lg" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>.
                </p>
            </div>
        </div>


    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.delete_img', function() {
                let number = $(this).data('number');
                $('#number_delete').val(number);
                Swal.fire({
                    title: 'Eliminar Imagen',
                    text: "¿Estas seguro de eliminar la imagen?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#C0392B',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Si, borrar imagen'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let element = document.getElementById('number_delete');
                        element.dispatchEvent(new Event('input'));
                        $('#form_delete').trigger('click');
                    }
                })
            });
        });
    </script>
@endsection
