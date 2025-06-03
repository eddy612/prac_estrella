<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
{{'Este es un ciclo for'}} 
	     <br>
	@for ($i = 0; $i < 10; $i++)
	     El valor actual es {{ $i }}
	     <br>
	@endfor
{{'Este es un condicional simple'}} 
{{$dias=6}}
@if ($dias==7)
  El día es sábado!
@endif
 
{'Este es un condicional compuesto'}} 
{{$users=6}}
@if($users === 1 )
	Solo hay un usuario!
	<br>
@elseif ($users > 1)
	Hay muchos usuarios!
	<br>
@else
	No hay ningúnn usuario :(
	<br>
@endif

{{'Este es un switch'}}
@php $letra="a"; @endphp
@php($letra = "a")

@switch($letra)
@case("a")
	la letra es "a"
@break
@case("b")
	la letra es "b"
@break
@default
	Es el código que se ejecutará si no era ninguno de los estados anteriores.
@endswitch



</body>
</html>