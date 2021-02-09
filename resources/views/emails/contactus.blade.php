<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        h1{
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Correo electronico de prueba</h1>
    <p>Este es un correo electronico de prueba utilizando por primera vez Laravel</p>
    <p>Informacion de contacto: </p> <br>

    <p><strong>Nombre:</strong> {{$contact['name']}}</p>
    <p><strong>Correo:</strong> {{$contact['mail']}}</p>
    <p><strong>Mensaje:</strong> {{$contact['mensaje']}}</p>
</body>
</html>