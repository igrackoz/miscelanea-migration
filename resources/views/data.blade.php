<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="fc-orange">
    @extends('layouts.nav-mobile')
    <h1>{{ $title }}</h1>
    <p>{{ $description }}</p>
    <a href="{{ route('prueba') }}">Ir a prueba</a>
</body>
</html>