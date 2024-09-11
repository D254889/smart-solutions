<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body>
    <header>
        <x-navbar />
    </header>
    <main>
        {{$slot}}
    </main>

    <footer>
        <x-footer />
    </footer>
</body>
</html>