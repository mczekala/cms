<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
		<script>tinymce.init({selector:'textarea'});</script>
    </head>
    <body>
        <div class="links">
            <a href="/">Home</a>
            <a href="/createPage">Create Page</a>
            <a href="/editPage">Edit Page</a>
            <a href="/admin">Admin</a>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
