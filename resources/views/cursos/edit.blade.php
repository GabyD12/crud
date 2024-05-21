<h1>Actualizar Profesor</h1>
<form action="{{route('curso.update', $curso)}}"  method="POST">

    @csrf
    @method('put')
    <label>
    Cedula
    <br>
    <input name="cedula" type="text" value="{{old('cedula',$curso->cedula) }}">
    <br>
    </label>
   
    <label>
    Name:
    <br>
     <input name="name" type="text" value="{{old('Name',$curso->name) }}">
     <br>
     </label>
    
    <label>
    Direccion:
    <br>
    <input name="direccion" type="text" value="{{old('direccion',$curso->direccion)}}">
    <br>
    </label>
    Telefono
    <br>
    <input name="telefono" type="text" value="{{old('Telefono',$curso->telefono) }}">
    <br>
    </label>
    <br>
    <label>
    <br>
   
    <button  type="submit">Actualizar Curso</button>
   
</form>