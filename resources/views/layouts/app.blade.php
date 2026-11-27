<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | POS System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f6f8; color: #222; }
        nav { background: #1f2937; padding: 12px 24px; }
        nav a { color: #d1d5db; text-decoration: none; margin-right: 20px; }
        nav a:hover, nav a.active { color: #ffffff; font-weight: bold; }
        main { max-width: 900px; margin: 24px auto; padding: 0 16px; }
        table { width: 100%; border-collapse: collapse; background: #fff; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background: #e5e7eb; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('customers') }}" class="{{ request()->routeIs('customers') ? 'active' : '' }}">Customers</a>
        <a href="{{ route('users') }}" class="{{ request()->routeIs('users') ? 'active' : '' }}">Users</a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>