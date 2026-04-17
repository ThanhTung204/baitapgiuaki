<!DOCTYPE html>
<html>
<head>
    <title>QLSV PRO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        .sidebar {
            width: 230px;
            height: 100vh;
            position: fixed;
            background: linear-gradient(180deg,#4e73df,#224abe);
            color: white;
            padding: 20px;
        }

        .sidebar h4 {
            font-weight: bold;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 10px;
            border-radius: 8px;
            text-decoration: none;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            background: rgba(255,255,255,0.2);
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .card {
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
    </style>
</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <h4>🎓 QLSV</h4>

    <a href="/dashboard">📊 Dashboard</a>
    <a href="/students">📚 Sinh viên</a>

    @auth
    <form method="POST" action="/logout">
        @csrf
        <button class="btn btn-light w-100 mt-3">Đăng xuất</button>
    </form>
    @endauth
</div>

<!-- Content -->
<div class="content">

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @yield('content')

</div>

</body>
</html>