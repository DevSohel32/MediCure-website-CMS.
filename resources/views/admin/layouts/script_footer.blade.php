<script src="{{ asset('dist-admin/js/scripts.js') }}"></script>
<script src="{{ asset('dist-admin/js/custom.js') }}"></script>

@if($global_setting->layout_direction == 'RTL')
@php
    $position = "top-start";
@endphp
@else
@php
    $position = "top-end";
@endphp
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "{{ $position }}",
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: 'error',
            title: '{{ $error }}'
        });
    </script>
    @endforeach
@endif
@if(Session::has('error'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "{{ $position }}",
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: 'error',
            title: '{{ Session::get("error") }}'
        });
    </script>
@endif
@if(Session::has('success'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "{{ $position }}",
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: "{{ Session::get("success") }}"
        });
    </script>
@endif
@if(Session::has('info'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "{{ $position }}",
            showConfirmButton: false,
            timer: 1800,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "info",
            title: "{{ Session::get("info") }}"
        });
    </script>
@endif