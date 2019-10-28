</<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
    <h1>All sections</h1>
    <ul>
        @foreach ($sections as $section)
            <li> {{ $section}}  </li>
        @endforeach
    </ul>
</body>
</html>