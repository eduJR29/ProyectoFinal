<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Pacientes</title>

    @vite(['resources/css/pico.css',])

</head>
<body>
    <img src="http://www.medicohomeopataonline.com/wp-content/uploads/2020/03/Medico-Homeopata-online_.png" width="65"
    height="65"> 
    <a class="boton" href="http://crud.test/dashboard">Inicio</a>
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
                <!--<a href="/paciente/{{ $paciente->id }}/edit">Editar</a>-->
                    <form action="/paciente/{{ $paciente->id }}/edit">
                       <input type="submit" value="Editar">
                    </form>
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