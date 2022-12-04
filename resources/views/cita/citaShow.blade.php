<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de la cita</title>

    @vite(['resources/css/pico.css',])
</head>
<body>
    <img src="http://www.medicohomeopataonline.com/wp-content/uploads/2020/03/Medico-Homeopata-online_.png" width="65"
    height="65"> 
    <a class="boton" href="http://consultorio.test/dashboard">Inicio</a>
    
    <h1>Información de la Cita</h1>
    <h2>{{ $cita->id }}</h2>
    <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Fecha</th>
                <th>Hora</th>
            </tr>
            <tr>
                <td>{{ $cita->id }}</td>
                <td>{{ $cita->nombre }}</td>
                <td>{{ $cita->apellidop }}</td>
                <td>{{ $cita->apellidom }}</td>
                <td>{{ $cita->fecha }}</td>
                <td>{{ $cita->hora }}</td>
            </tr>
        </table>
</body>
</html>