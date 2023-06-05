{{-- @if(session()->has('message'))
important
<div x-data="{show : true}" x-show="show" x-init="setTimeout(() => show = false, 5000)">
<div class="swalDefaultSuccess">
<p>Alert Message
</p>
<h1>{{ session('message') }}</h1>
</div>


@endif --}}


<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>

    <script>
    $(function(){
        @if(session()->has('message'))
            Swal.fire({
            position: 'top-end',
            toast: true,
            icon: 'success',
            title: 'Great!',
            text: '{{ Session::get("message") }}',
            showConfirmButton: false,
            timer: 3000
        })
        @endif
    });
    </script>
