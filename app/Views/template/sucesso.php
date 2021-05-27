@if (session('success'))
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title:  "Sucesso!",
                showConfirmButton: false,
                timer: 1000
            });
        });
    </script>
@endif