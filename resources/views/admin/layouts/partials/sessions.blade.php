
@if(Session::has('success'))
    <script>
        Swal.fire(
            'Good job!',
            '{{ Session::get("success") }}',
            'success'
        )
    </script>
@endif
@if(Session::has('error'))
    <script>
        Swal.fire(
            'Bad job!',
            '{{ Session::get("error") }}',
            'error'
        )
    </script>
@endif