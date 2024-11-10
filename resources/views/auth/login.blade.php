<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | @yield('page-title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1">Your <b>Earnings</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form id="login" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="col-12 d-flex justify-content-between">
                    <p>
                        <a href="/register" class="text-center">Register</a>
                    </p>
                    <p>
                        <a href="#">Forgot password</a>
                    </p>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#login').on('submit', function(event) {
                event.preventDefault();
                var form = $(this);
                // Menonaktifkan tombol submit
                form.find('button[type="submit"]').prop('disabled', true);

                $.ajax({
                    url: form.attr('action'),
                    method: form.attr('method'),
                    data: form.serialize(),
                    success: function(response) {
                        // Jika validasi berhasil, redirect atau lakukan tindakan lain
                        Swal.fire({
                            title: 'Success',
                            text: response.success,
                            icon: 'success',
                            timer: 1500,
                            showConfirmButton: false
                        }).then((result) => {
                            window.location.href = response.redirect;
                        });
                    },
                    error: function(xhr) {
                        // Dapatkan objek errors dari response JSON Laravel
                        var errors = xhr.responseJSON.errors;
                        var errorMessage = '';
                        $.each(errors, function(field, messages) {
                            messages.forEach(function(message) {
                                errorMessage += message + '<br>';
                            });
                        });

                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: errorMessage
                        });

                        // Aktifkan kembali tombol submit
                        form.find('button[type="submit"]').prop('disabled', false);
                    }
                });
            });
        });
    </script>
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    timer: 2500,
                    showConfirmButton: false
                });
            });
        </script>
    @endif
    @if (session('failed'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: '{{ session('failed') }}',
                });
            });
        </script>
    @endif

</body>

</html>
