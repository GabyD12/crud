<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>

<form action="{{route('qualification.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Escriba el nombre del alumno:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Escriba la nota 1:
    <br>
    <input type="number" name="nota1">
</label>
<br>
<label>
    Escriba la nota 2:
    <br>
    <input type="number" name="nota2">
</label>
<br>
<label>
    Escriba la nota 3:
    <br>
    <input type="number" name="nota3">
</label>
<br>
<br><br>

<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>