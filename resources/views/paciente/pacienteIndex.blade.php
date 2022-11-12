<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Pacientes</title>
</head>
<body>
    <h1>Listado de Pacientes</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        @foreach ($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->id }}</td>
                <td>
                    <a href="/paciente/{{ $paciente->id }}">
                        {{ $paciente->nombre }}
                    </a>
                </td>
                <td>{{ $paciente->apellidop }}</td>
                <td>{{ $paciente->apellidom }}</td>
                <td>
                <a href="/paciente/{{ $paciente->id }}/edit">Editar</a>
                </td>
                <td>
                    <form action="/paciente/{{ $paciente->id }}" method="post">
                       @csrf
                       @method('DELETE')
                       <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
        </table>
</body>
</html>