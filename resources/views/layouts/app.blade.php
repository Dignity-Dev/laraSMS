<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    {{--
    <link rel="stylesheet" href="style.css"> --}}

  <style>
    /* General styles */
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f9f9f9;
    }

    nav {
        background-color: #333;
        padding: 10px 0;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    nav ul li {
        display: inline;
        margin: 0 15px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }

    nav ul li a:hover {
        text-decoration: underline;
    }

    header,
    footer {
        text-align: center;
        padding: 20px;
        background-color: #eee;
    }

    main {
        padding: 20px;
        max-width: 800px;
        margin: auto;
    }
</style>


</head>

<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="portfolio">Portfolio</a></li>
            <li><a href="contact">Contact Us</a></li>
        </ul>
    </nav>

    <header>
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; 2025 My Website
    </footer>


    @yield('scripts')
</body>

</html>
