@extends('admin.layout')
@section('content')
    <div class="grid grid-cols-1 gap-4">
        <form action="{{ URL('/admin/images/up') }}" method="POST" class="dropzone" id="my-great-dropzone"
            enctype="multipart/form-data">
            @csrf
        </form>
    </div>
    <div class="grid grid-cols-1 gap-4">
        @livewire('table-images')
    </div>
@endsection
@section('js')
    <script>
        Dropzone.options.myGreatDropzone = { // camelized version of the `id`
            dictDefaultMessage: "Has click o suelta la imagen en esta zona",
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            accept: {
                'image/*': ['.jpeg', '.jpg', '.png'],
            },
            accept: function(file, done) {
                $('#btnUpdateImages').trigger('click');
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        };
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.delete_img', function() {
                let id = $(this).data('id');
                $('#id_image').val(id);
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
                        let element = document.getElementById('id_image');
                        element.dispatchEvent(new Event('input'));
                        $('#form_delete').trigger('click');
                    }
                })
            });

        });
    </script>
@endsection
