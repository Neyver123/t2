<h1>ACTUALIZAR</h1>
<form method="post" action="/productos/{{$productos->id}}">
    @csrf
    <input type="text" name="salida" value="{{$productos->salida}}"><br>
    <input type="text" name="ingreso" value="{{$productos->ingreso}}"><br>
    <input type="submit" value="Actualizar">
    @method("PUT")
</form>
<?php


