<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Libreria</title>
</head>
<body>
        {{-- @if ($Libro->Users->nombre) --}}
         
        <h1 class="presentacion">Hola {{auth()->user()->nombre}}, Listo para imaginar?</h1>
        <div class="titulocre">
        <h1>Edita tus escritos</h1><hr>
        </div>
        <form id="FormCreaLibros" method="post" action="{{route('actu',$editar->id)}}" >
            {{ csrf_field() }}
            <div class="ini">
            <div class="librospre">
                <div class="titulo">
                    <h1>Crea nuevos escritos</h1><hr>
                </div>
                <div>
                    <p>Aqui el Titulo</p>
                    <input type="text" class="EditTitulo" name="Titulo" id="Titulo" value="{{$editar->Titulo}}" ><br><br> 
                </div>
                <div>
                    <textarea name="escrito" class="EditEscrito" id="escrito" cols="60" rows="10" placeholder="aqui el contenido de tu escrito">{{$editar->Libro}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary" >Crear</button>
            </div>
            </div>
        </form>
</body>
</html>