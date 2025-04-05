<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác thực Email - LaravelPanel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .verify-container {
            max-width: 400px;
            width: 100%;
            padding: 2rem;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>
    <div class="verify-container">
        <div class="card">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h2 class="card-title">Xác thực địa chỉ Email</h2>
                    <p class="text-muted">
                        Trước khi tiếp tục, vui lòng kiểm tra email của bạn để xác thực.
                    </p>
                </div>

                @if (session('resent'))
                    <div class="alert alert-success">
                        Một liên kết xác thực mới đã được gửi đến địa chỉ email của bạn.
                    </div>
                @endif

                <p class="text-center">
                    Nếu bạn không nhận được email,
                    <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                            bấm vào đây để yêu cầu gửi lại
                        </button>
                    </form>
                </p>

                <div class="text-center mt-3">
                    <a href="{{ route('logout') }}" class="text-decoration-none"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Đăng xuất
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
