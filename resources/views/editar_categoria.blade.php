<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('Css/estilo.css')}}">
    <title>Document</title>
</head>
<body>
    <form action="{{route('editar_categoria', ['id' => $categorias->id])}}" method="post">
        @csrf
        <input type="text" name="id" value="{{$categorias->id}}" placeholder="{{$categorias->id}}" disabled>
        <input type="text" name="nombre" placeholder="{{$categorias->nombre}}">
        <textarea name="descripcion" cols="30" rows="10" value="{{$categorias->descripcion}}">

        </textarea>
        
        <input type="submit" value="editar Categoria">
    </form>
</body>
</html>