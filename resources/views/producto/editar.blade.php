<h1>ACTUALIZAR</h1>
<form method="post" action="/productos/{{$productos->id}}">
    @csrf
    <input type="text" name="nombre" value="{{$productos->nombre}}"><br>
    <input type="text" name="nombre" value="{{$productos->stock}}"><br>
    <input type="text" name="nombre" value="{{$productos->vencimiento}}"><br>
    <input type="submit" value="Actualizar">
    @method("PUT")
</form>
<?php


