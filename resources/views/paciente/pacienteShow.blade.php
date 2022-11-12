<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Paciente</title>
</head>
<body>
    <h1>Información de Paciente</h1>
    <h2>{{ $paciente->nombre }}</h2>
    <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Telefono</th>
                <th>Direccion</th>
            </tr>
            <tr>
                <td>{{ $paciente->id }}</td>
                <td>{{ $paciente->nombre }}</td>
                <td>{{ $paciente->apellidop }}</td>
                <td>{{ $paciente->apellidom }}</td>
                <td>{{ $paciente->sexo }}</td>
                <td>{{ $paciente->edad }}</td>
                <td>{{ $paciente->telefono }}</td>
                <td>{{ $paciente->direccion }}</td>
            </tr>
        </table>
</body>
</html>