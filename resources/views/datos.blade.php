<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Enviar mensaje</h2>
                <form method="POST" action="{{route ('store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Escribe tu nombre" value="{{old('nombre')}}">
                    </div> 

                    <div class="form-group">
                        <input type="edad" name="edad" class="form-control" placeholder="Escribe tu edad " value="{{old('edad')}}"> 
                    </div> 

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Escribe tu email" value="{{old('email')}}"> 
                    </div> 

                    <div class="form-group">
                        <input type="direccion" name="direccion" class="form-control" placeholder="Escribe tu direccion" value="{{old('direccion')}}"> 
                    </div>

                    <div class="form-group">
                        <input type="curp" name="curp" class="form-control" placeholder="Escribe tu curp" value="{{old('curp')}}"> 
                    </div> 
                    
                    <div class="form-group">
                        <input type="RFC" name="RFC" class="form-control" placeholder="Escribe tu RFC" value="{{old('RFC')}}"> 
                    </div> 

                    <div class="form-group">
                        <textarea name="mensaje" class="form-control" placeholder="Escribe tus comentarios" value="{{old('mensaje')}}"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Enviar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if (count($errors) > 0) 

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        </ul> 
    @endif
</body>
</html>