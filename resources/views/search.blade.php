<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miscelanea Ana</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="fc-orange">
    @extends($deviceType)
    <a href="{{ route('datos') }}">Ir a datos</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departamentos as $departamento)
                <tr>
                    <td>{{ $departamento->department_id }}</td>
                    <td>{{ $departamento->department_name }}</td>
                    <td>{{ $departamento->department_image }}</td>
                    <td>{{ $departamento->department_enabled }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>