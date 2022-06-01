<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <title>Libreria</title>
</head>
<body>
    <div>
        {{-- @if ($Libro->Users->nombre) --}}
            
        <h1>Bienvenid@ {{auth()->user()->nombre}}</h1>
        @foreach ($Libros as $Librito)
        
        
        <div>
            <div>
                <p>Tus libros</p><br> 
                <h1>{{$Librito->Titulo}}</h1>
                <h1>{{$Librito->Libro}}</h1>
            </div>
        </div>
        <div>
            <hr>
            
        @endforeach
        <form action="" method="post">
        <div class="ini">
            <h1>Crea nuevos libros</h1>
        </div>
        <div>
            <textarea></textarea>
        </div>
        <div>
            <p>Aqui el Titulo</p>
            <input type="text" class="EditTitulo" placeholder="titulo"><br><br> 
        </div>
    </div>
    <div>
        <textarea name="escrito" class="EditEscrito" id="escrito" cols="30" rows="10" placeholder="aqui el contenido de tu cuentom"></textarea>
    </div>
    <button type="submit">Crear</button>
        </form>
        
    </div>
</body>
</html>