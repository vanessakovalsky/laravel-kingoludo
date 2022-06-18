<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('titre')</title>
    <link href="/css/app.css" rel="stylesheet" type="text/css"></head>
<body>
    <x-alert-component/>
    Mon super template
    
    @yield('contenu')
</body>
</html>