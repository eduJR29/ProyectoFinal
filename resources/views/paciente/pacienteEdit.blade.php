<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Paciente</title>
</head>
<body>
    <h1>Crear Paciente</h1>

    <form action="/paciente/{{ $paciente->id }}" method="post">
        @csrf
        @method('patch')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') ?? $paciente->nombre }}">
        @error('nombre')
              <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="apellidop">Apellido Paterno:</label>
        <input type="text" name="apellidop" value="{{ $paciente->apellidop }}">
        @error('apellidop')
              <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="apellidom">Apellido Materno:</label>
        <input type="text" name="apellidom" value="{{ $paciente->apellidom }}">
        @error('apellidom')
              <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="sexo">Sexo:</label>
        <input type="radio" name="sexo" value="F" {{ old('sexo', $paciente->sexo) ? 'checked' : '' }}>F
        <input type="radio" name="sexo" value="M" {{ old('sexo', $paciente->sexo) ? 'checked' : '' }}>M
        <br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" value="{{ $paciente->edad }}">
        @error('edad')
              <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" value="{{ $paciente->telefono }}">
        @error('telefono')
              <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" value="{{ $paciente->direccion }}">
        @error('direccion')
              <i>{{ $message }}</i>
        @enderror
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>