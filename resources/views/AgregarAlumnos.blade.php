<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            max-width: 500px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4 class="text-center">Formulario de Alumno</h4>
        <form method="post" action="{{ route('store') }}">
            {{ csrf_field() }}
            
            <div class="form-group">
                <input type="text" name="AlumnoId" class="form-control" placeholder="Alumno ID" value="{{ old('AlumnoId') }}">
            </div>

            <div class="form-group">
                <input type="text" name="Nombre" class="form-control" placeholder="Nombre" value="{{ old('Nombre') }}">
            </div>

            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <input type="text" name="Direccion" class="form-control" placeholder="Dirección" value="{{ old('Direccion') }}">
            </div>

            <div class="form-group">
                <input type="text" name="Ciudad" class="form-control" placeholder="Ciudad" value="{{ old('Ciudad') }}">
            </div>

            <div class="form-group">
                <input type="text" name="Estado" class="form-control" placeholder="Estado" value="{{ old('Estado') }}">
            </div>

            <div class="form-group">
                <input type="text" name="CodPos" class="form-control" placeholder="Código Postal" value="{{ old('CodPos') }}">
            </div>

            <div class="text-center">
                <input type="submit" value="Enviar" class="btn btn-primary w-100">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>