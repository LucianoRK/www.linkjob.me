@if (session('warning'))
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title:  "",
                text: 'Erro!',
                showConfirmButton: true,
            });
        });
    </script>
@endif