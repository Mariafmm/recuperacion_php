<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <form id="formulario" action="{{route ('registracion') }}" method="POST">
        {{ csrf_field() }}
        <div class="ini">
            <div class="personasRe">
                <div>
                    <h1>Iniciar Sesion</h1>
                    <img src="{{asset('img/login.png')}}" ><hr>
                </div>
                <label for="">nombre</label>
                <input type="text" name="nombre" value="{{old('nombre')}}" id="nombre">
                @error('nombre')
                    <span class="ErrorLogin" >{{$message}}</span>
                @enderror
                <br>
                <label for="">Correo</label>
                <input type="text" name="email" value="{{old('email')}}" id="email">
                @error('email')
                    <span class="ErrorLogin" >{{$message}}</span>
                @enderror
                <br>
                <label for="">Contraseña</label>
                <input type="password" name="contra" value="{{old('contra')}}" id="contra">
                @error('contra')
                    <span class="ErrorLogin" >{{$message}}</span>
                @enderror
                <br>
                <button type="submit" class="btn btn-primary" onclick="enviar()">Enviar</button>
            </div>
        </div>
    </form>
</body>
</html>