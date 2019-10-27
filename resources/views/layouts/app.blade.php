<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="links">
            <a href="/createPage">Docs</a>
            <a href="/admin">Laracasts</a>
            <a href="/">Home</a>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>