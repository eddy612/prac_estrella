<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        h4 {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }
        .table {
            background-color: white;
        }
    </style>
</head>
<body>
    <form action="{{route('buscar')}}" method="get">
<form action="">
    <input type="text" class="form-control" name="texto">
    <input type="submit" class="btm btn-primary"
    value="buscar">
</form>
<div class="container">
    <h4>Lista de Estudiantes</h4>
    <div class="row">
        <div class="col-xl-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Matrícula</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumnos as $Alumno)
                            <tr>
                                <td>{{ $Alumno->AlumnoId }}</td>
                                <td>{{ $Alumno->Nombre }}</td>
                                <td>{{ $Alumno->Direccion }}</td>
                                <td>
                                    <a href="{{ route('alumnos.edit', $Alumno->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                    <button class="btn btn-danger btn-sm">Eliminar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>