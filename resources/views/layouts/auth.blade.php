<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | {{ config('app.name') }}</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #0a0f23;
            color: #ffffff;
        }

        .login-box {
            background: #151b30;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.2);
        }

        .form-control, .form-check-input {
            background-color: #1c233a;
            border: 1px solid #2f3b52;
            color: white;
        }

        .form-control:focus {
            border-color: #00e1ff;
            box-shadow: 0 0 0 0.2rem rgba(0, 225, 255, 0.25);
        }

        .btn-cyber {
            background-color: #00e1ff;
            border: none;
        }

        .btn-cyber:hover {
            background-color: #00c1dd;
        }
    </style>
</head>
<body>
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="login-box p-5 col-md-6 col-lg-4">
            <div class="text-center mb-4">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" width="60">
                <h3 class="mt-3 text-cyan">Login</h3>
            </div>

            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
