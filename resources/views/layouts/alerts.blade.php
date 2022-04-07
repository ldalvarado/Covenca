<script>

    @if (session('success'))
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Se ha creado correctamente',
            showConfirmButton: false,
            timer: 3000
        })
    @endif

    @if (session('actualizo'))
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Se ha Actualizado correctamente',
            showConfirmButton: false,
            timer: 3000
        })
    @endif

    @if (session('error'))
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Ocurrió un error',
            showConfirmButton: false,
            timer: 3000
        })
    @endif

</script>