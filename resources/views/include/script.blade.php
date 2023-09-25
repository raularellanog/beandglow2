@livewireScripts
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    window.addEventListener('success', event => {
        Toast.fire({
            icon: 'success',
            title: event.detail.message != null ? event.detail.message : 'Proceso realizado.'
        });
    });
    window.addEventListener('info', event => {
        Toast.fire({
            icon: 'info',
            title: event.detail.message != null ? event.detail.message : 'Proceso realizado.'
        });
    });
    window.addEventListener('error', event => {
        Toast.fire({
            icon: 'error',
            title: event.detail.message != null ? event.detail.message : 'Proceso no realizado.'
        });
    });
    window.addEventListener('updateCart', event => {
        console.log('actualizar cart');
        $('.updateCart').trigger('click');
    });
    window.addEventListener('updateFav', event => {
        console.log('actualizar fav');
        $('.updateFav').trigger('click');
    });
</script>
<script>
    if ($('.copy_img').length > 0) {
        $(document).on('click', '.copy_img', function() {
            let url = $(this).data('url');
            navigator.clipboard.writeText(url)
                .then(() => {
                    Toast.fire({
                        icon: 'success',
                        title: 'URL Imagen copiada.'
                    });
                })
                .catch(err => {
                    Toast.fire({
                        icon: 'error',
                        title: 'Error al copiar.'
                    });
                })
        });
    }
</script>
<script>
    $("#modal").iziModal();
    $(document).ready(function() {
        $('#modal').iziModal('open');
        console.log('open');

    });
</script>
