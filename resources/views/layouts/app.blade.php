<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Library System</h1>
        <hr>
    </header>

    <nav>
        <a href="/dashboard">Dashboards</a>
        <a href="/books">Books</a>
        <a href="/categories">Book Categories</a>
        <a href="/members">Members</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>libray system</p>
    </footer>
</body>
</html>
