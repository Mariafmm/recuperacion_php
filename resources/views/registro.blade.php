<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form id="formulario" action="{{route ('registracion') }}" method="POST">
        {{ csrf_field() }}
        <label for="">nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <br>
        <label for="">Correo</label>
        <input type="text" name="email" id="email">
        <br>
        <br>
        <label for="">Contraseña</label>
        <input type="password" name="contra" id="contra">
        <button type="submit"  onclick="enviar()">Enviar</button>
        </form>
</body>
</html>