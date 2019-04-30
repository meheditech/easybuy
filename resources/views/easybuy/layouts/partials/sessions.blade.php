
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

@if(Session::has('confirm'))
    <script>
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                Swal.fire(
                    'Deleted!',
                    '{{ Session::get('confirm') }}',
                    'success'
                )
            }
        })
    </script>
@endif