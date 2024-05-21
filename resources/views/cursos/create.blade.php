<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Profesor</h1>


    <form action="{{route('cursos.store')}}" method="POST" enctype="multipart/form-data">


        @csrf
       
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            cedula
            <br>
            <input type="text" name="cedula">
        </label>
        <br>
        <label>
            direccion
            <br>
            <input type="text" name="direccion">
        </label>
        <br>
        <label>
            telefono
            <br>
            <input type="text" name="telefono">
        </label>
       
        
        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>
</body>
</html>