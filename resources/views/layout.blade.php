<html>
<head>
    <title> @yield('title', 'BasicsLaravel') </title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="info">Info</a></li>
            <li><a href="laravel">Laravel</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>
