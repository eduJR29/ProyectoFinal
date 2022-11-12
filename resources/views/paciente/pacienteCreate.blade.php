<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Paciente</title>
    
    @vite(['resources/css/pico.css',])
</head>
<body>
    <img src="http://www.medicohomeopataonline.com/wp-content/uploads/2020/03/Medico-Homeopata-online_.png" width="65"
    height="65"> 
    <a class="boton" href="http://crud.test/dashboard">Inicio</a>
    
    <h1>Crear Paciente</h1>

    <form action="/paciente" method="post">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
        @error('nombre')
              <i>{{ $message }}</i>
        @enderror
        <br>

        <label for="apellidop">Apellido Paterno:</label>
        <input type="text" name="apellidop" value="{{ old('apellidop') }}">
        @error('apellidop')
              <i>{{ $message }}</i>
        @enderror
        <br>

        <label for="apellidom">Apellido Materno:</label>
        <input type="text" name="apellidom" value="{{ old('apellidom') }}">
        @error('apellidom')
              <i>{{ $message }}</i>
        @enderror
        <br>

        <label for="sexo">Sexo:
        <input type="radio" name="sexo" value="F" {{ old('sexo') ? 'checked' : '' }}>F
        <input type="radio" name="sexo" value="M" {{ old('sexo') ? 'checked' : '' }}>M
        </label>
        <br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" value="{{ old('edad') }}">
        @error('edad')
              <i>{{ $message }}</i>
        @enderror
        <br>

        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" value="{{ old('telefono') }}">
        @error('telefono')
              <i>{{ $message }}</i>
        @enderror
        <br>

        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" value="{{ old('direccion') }}">
        @error('direccion')
              <i>{{ $message }}</i>
        @enderror
        <br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>