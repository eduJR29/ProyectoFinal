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
    
    <h1>Modificar Cita</h1>

    <form action="/cita/{{ $cita->id }}" method="post">
        @csrf
        @method('patch')
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" value="{{ old('fecha') }}">
        @error('fecha')
              <i>{{ $message }}</i>
        @enderror
        <br>

        <label for="hora">Hora:</label>
        <input type="time" name="hora" value="{{ old('hora') }}">
        @error('hora')
              <i>{{ $message }}</i>
        @enderror
        <br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>