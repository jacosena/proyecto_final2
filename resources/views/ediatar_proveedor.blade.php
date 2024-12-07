<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('add_proveedor', ['id' => $proveedor->id])}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$proveedor->id}}" disabled>
        <input type="text" name="nombre" value="{{$proveedor->Nombre}}" placeholder="{{$proveedor->Nombre}}">
        <input type="text" name="direccion" value="{{$proveedor->Nombre}}" placeholder="{{$proveedor->Nombre}}">
        <input type="tel" name="telefono" value="{{$proveedor->Nombre}}" placeholder="{{$proveedor->Nombre}}">
        <input type="email" name="correo" value="{{$proveedor->Nombre}}" placeholder="{{$proveedor->Nombre}}">
        <input type="tel" name="contacto" value="{{$proveedor->Nombre}}" placeholder="{{$proveedor->Nombre}}">
        <textarea name="descripcion" cols="30" rows="10">

        </textarea>
        <input type="submit" value="Crear Proveedor">
    </form>
</body>
</html>