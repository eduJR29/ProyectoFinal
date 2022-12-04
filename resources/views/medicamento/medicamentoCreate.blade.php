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
    
    <h1>Agregar Medicamento</h1>

    <form action="/medicamento" method="post">
        @csrf
        <label for="paciente_id">Paciente:</label>
        <select name="paciente_id" id="paciente_id">
            @foreach ($pacientes as $paciente)
               <option value="{{ $paciente->id }}">{{ $paciente->nombre }}</option>
            @endforeach
        </select>
        <br>
        
        <label for="nombre_medicamento">Nombre del Medicamento:</label>
        <input type="text" name="nombre_medicamento" value="{{ old('nombre_medicamento') }}">
        @error('nombre_medicamento')
              <i>{{ $message }}</i>
        @enderror
        <br>

        <label for="presentacion">Presentacion:</label>
        <input type="text" name="presentacion" value="{{ old('presentacion') }}">
        @error('presentacion')
              <i>{{ $message }}</i>
        @enderror
        <br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" value="{{ old('cantidad') }}">
        @error('cantidad')
              <i>{{ $message }}</i>
        @enderror
        <br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>