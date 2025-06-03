<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h4>Editar Alumno</h4>
    
    <form method="post" action="{{ route('alumnos.update', $alumno->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="AlumnoId" class="form-label">Matrícula:</label>
            <input type="text" name="AlumnoId" class="form-control" value="{{ $alumno->AlumnoId }}" readonly>
        </div>

        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre:</label>
            <input type="text" name="Nombre" class="form-control" value="{{ old('Nombre', $alumno->Nombre) }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico:</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $alumno->email) }}">
        </div>

        <div class="mb-3">
            <label for="Direccion" class="form-label">Dirección:</label>
            <input type="text" name="Direccion" class="form-control" value="{{ old('Direccion', $alumno->Direccion) }}">
        </div>

        <div class="mb-3">
            <label for="Ciudad" class="form-label">Ciudad:</label>
            <input type="text" name="Ciudad" class="form-control" value="{{ old('Ciudad', $alumno->Ciudad) }}">
        </div>

        <div class="mb-3">
            <label for="Estado" class="form-label">Estado:</label>
            <input type="text" name="Estado" class="form-control" value="{{ old('Estado', $alumno->Estado) }}">
        </div>

        <div class="mb-3">
            <label for="CodPos" class="form-label">Código Postal:</label>
            <input type="text" name="CodPos" class="form-control" value="{{ old('CodPos', $alumno->CodPos) }}">
        </div>

        <button type="submit" class="btn btn-success">Guardar cambios</button>
        <a href="{{ route('lista') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>