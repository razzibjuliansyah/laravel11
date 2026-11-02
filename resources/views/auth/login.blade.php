<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Universitas Pamulang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url("{{ asset('images/hero (2).png') }}") no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            width: 100%;
            max-width: 420px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }
        .login-header {
            background-color: #ffc107;
            color: #000;
            font-weight: bold;
            text-align: center;
            padding: 20px;
            font-size: 1.25rem;
        }
    </style>
</head>
<body>

<div class="card login-card bg-white">
    <div class="login-header">
        Admin Login
    </div>
    <div class="card-body p-4">
        @if($errors->any())
            <div class="alert alert-danger py-2 small">{{ $errors->first() }}</div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label text-muted small fw-semibold">Email address</label>
                <input type="email" name="email" class="form-control" value="adminexample@gmail.com" required>
            </div>
            <div class="mb-4">
                <label class="form-label text-muted small fw-semibold">Password</label>
                <input type="password" name="password" class="form-control" value="password" required>
            </div>
            <button type="submit" class="btn btn-warning w-100 fw-bold py-2 text-dark">Login</button>
        </form>

        <div class="text-center mt-3 text-muted" style="font-size: 0.8rem;">
            Demo Login : adminexample@gmail.com / password
        </div>
    </div>
</div>

</body>
</html>