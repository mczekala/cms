</<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
    <h1>All pages</h1>
    <ul>
        @foreach ($pages as $page)
            <li>
                <a href="/admin/{$page->name}">{{ $page->title}}</button>
            </li>
        @endforeach
    </ul>
</body>
</html>