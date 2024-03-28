<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .btn {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="center">
        <button class="btn" onclick="redirectToLoginPage()">Giriş</button>
    </div>

    <script>
        function redirectToLoginPage() {
            window.location.href = "{{ route('login') }}";
        }
    </script>
</body>
</html>
