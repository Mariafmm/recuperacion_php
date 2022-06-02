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
            <h1>Tus escritos</h1><hr>
            </div>
        @foreach ($Libros as $Librito)
        <div class="creados">
            <div class="libroscre">
                <div class="titulocre">
                    <h1>{{$Librito->Titulo}}</h1><br>
                </div>
                <div class="titulolibro">
                    
                </div>
                <div class="content">
                    <hr><p>{{$Librito->Libro}} </p><hr>
                </div>
                <div class="botones">
                    <button type="submit" class="btn btn-success" >Editar</button>
                    <button type="submit" name="borrar" id="borrar" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
            <hr>
        @endforeach
        <form id="FormCreaLibros" action="{{route ('libros') }}" method="post">
            {{ csrf_field() }}
            <div class="ini">
            <div class="librospre">
                <div class="titulo">
                    <h1>Crea nuevos escritos</h1><hr>
                </div>
                <div>
                    <p>Aqui el Titulo</p>
                    <input type="text" class="EditTitulo" name="Titulo" id="Titulo" placeholder="titulo"><br><br> 
                </div>
                <div>
                    <textarea name="escrito" class="EditEscrito" id="escrito" cols="60" rows="10" placeholder="aqui el contenido de tu escrito"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" >Crear</button>
            </div>
            </div>
        </form>
</body>
</html>