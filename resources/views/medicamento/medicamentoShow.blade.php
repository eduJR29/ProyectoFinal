<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicamentos</title>

    @vite(['resources/css/pico.css',])
</head>
<body>
    <img src="http://www.medicohomeopataonline.com/wp-content/uploads/2020/03/Medico-Homeopata-online_.png" width="65"
    height="65"> 
    <a class="boton" href="http://consultorio.test/dashboard">Inicio</a>
    
    <h1>Información del Medicamento</h1>
    <h2>{{ $medicamento->nombre_medicamento }}</h2>
    <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
            <tr>
            @foreach ($medicamento->pacientes as $paciente)
                <td>{{ $paciente->id }}</td>
                <td>{{ $paciente->nombre }}</td>
            @endforeach
            </tr>
        </table>
</body>
</html>