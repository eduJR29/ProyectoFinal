<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>

    @vite(['resources/css/pico.css',])

</head>
<body>
    <img src="http://www.medicohomeopataonline.com/wp-content/uploads/2020/03/Medico-Homeopata-online_.png" width="65"
    height="65"> 
    <a class="boton" href="http://consultorio.test/dashboard">Inicio</a>
    <h1>Citas</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Hora</th>
                <th>Fecha</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        @foreach ($citas as $cita)
            <tr>
                <td>
                <a href="/paciente/{{ $cita->id }}">
                     {{ $cita->id }}
                </td>
                <!--<td>
                    <a href="/paciente/{{ $cita->id }}">
                        {{ $cita->paciente->nombre }}
                    </a>
                </td>-->
                <td>{{ $cita->fecha }}</td>
                <td>{{ $cita->hora }}</td>
                <td>
            
                    <form action="/cita/{{ $cita->id }}/edit">
                       <input type="submit" value="Editar">
                    </form>
                </td>
                <td>
                    <form action="/cita/{{ $cita->id }}" method="post">
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