<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- 🔥 FINAL CLEAN UI -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: #e2e8f0;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 20px;
            max-width: 900px;
            margin: auto;
        }

        h2, h3 {
            color: #38bdf8;
            margin-bottom: 10px;
        }

        a {
            color: #22c55e;
            text-decoration: none;
            margin-right: 10px;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }

        .nav {
            background: #020617;
            padding: 15px;
            border-bottom: 1px solid #1e293b;
            text-align: center;
        }

        .nav a {
            margin: 0 10px;
            font-weight: bold;
        }

        .card {
            background: #1e293b;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        input {
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            border-radius: 5px;
            border: none;
            background: #334155;
            color: white;
        }

        button {
            padding: 10px;
            background: #22c55e;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background: #16a34a;
        }

        form {
            max-width: 400px;
        }

        .section {
            margin-top: 25px;
        }
    </style>
</head>

<body>

    <div class="nav">
        <a href="/dashboard">Dashboard</a>
        <a href="/books">Books</a>
        <a href="/create-librarian">Add Librarian</a>
        <a href="/admin">Admin</a>
    </div>

    <div class="container">
        @isset($header)
            <header>
                {{ $header }}
            </header>
        @endisset

        <main>
            {{ $slot }}
        </main>
    </div>

</body>
</html>