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
    <body>
        <a href="{{route('home')}}">
            <section>
                <h2>Crear Producto</h2>
            </section>
        </a>
    
        <form action="{{route('add_categoria')}}" method="post">
            @csrf
            <input type="text" name="nombre" placeholder="name categoria">
            <textarea name="descripcion" cols="30" rows="10">
    
            </textarea>
            <input type="submit" value="Crear categoria">
            
        </form>
        <h2>list Category</h2>
        <table>
            <thead>
                <th>id</th>
                <th>nombre</th>
                <th>descripcion</th>
                <th>editar</th>
                <th>eliminar</th>
            </thead>
            <tbody>
                @foreach ( $categorias as $categoria )
                    <tr>
                        <td>{{$categoria->id}}</td>
                        <td>{{$categoria->Nombre}}</td>
                        <td>{{$categoria->Descripcion}}</td>
                        <td><a href="{{route('editar_categoria_view', $categoria->id)}}"> Edit </a></td>
                        <td><a href="{{route('eliminar_categoria', $categoria->id)}}"> Delete </a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</body>
</html>