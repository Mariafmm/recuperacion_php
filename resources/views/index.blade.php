<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <form id="formulario" action="{{route('login')}}" method="POST">
    {{ csrf_field() }}
    <label for="">Correo</label>
    <input type="text" name="email" id="email">
    <br>
    <br>
    <label for="">Contraseña</label>
    <input type="password" name="contra" id="contra">
    <button type="submit"  onclick="enviar()">Enviar</button>
    </form>
    @foreach ($errors->all() as $message)
            <h2>{{$message}}</h2>
        @endforeach
</body>
</html>