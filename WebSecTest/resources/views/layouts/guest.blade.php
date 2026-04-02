<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- 🔥 SAME STYLE APPLIED HERE -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0f172a;
            color: white;
            padding: 20px;
        }

        h2 {
            color: #38bdf8;
        }

        a {
            color: #22c55e;
            text-decoration: none;
        }

        input {
            padding: 8px;
            margin-bottom: 10px;
            width: 250px;
            border-radius: 5px;
            border: none;
        }

        button {
            padding: 8px 15px;
            background-color: #22c55e;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #16a34a;
        }

        .container {
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        {{ $slot }}
    </div>
</body>
</html>