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
    <h1>Medicamentos</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Presentacion</th>
                <th>Cantidad</th>
            </tr>
        @foreach ($medicamentos as $medicamento)
            <tr>
                <td>
                <a href="/medicamento/{{ $medicamento->id }}">
                     {{ $medicamento->id }}
                </td>
                
                <td>{{ $medicamento->nombre_medicamento }}</td>
                <td>{{ $medicamento->presentacion }}</td>
                <td>{{ $medicamento->cantidad }}</td>
                <td>
            
                    <form action="/medicamento/{{ $medicamento->id }}/edit">
                       <input type="submit" value="Editar">
                    </form>
                </td>
                <td>
                    <form action="/medicamento/{{ $medicamento->id }}" method="post">
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