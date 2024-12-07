<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('Css/estilo.css')}}">
    <title>Document</title>
</head>
<body>
    <article>
        <a href="{{route('proveedor')}}">
            <section>
                <h2>Create Provider</h2>
            </section>
        </a>
        
        <a href="{{route('categoria')}}">
            <section>
                <h2>Create Category</h2>
             </section>
        </a>
    </article>
    
        
    <form action="{{route('add_product')}}" method="post">
        <input type="text" name="product" placeholder="Name Product" required>
        <input type="number" name="price" placeholder="Price Product" required>
        <input type="number" name="stock" placeholder="Stock Product" required>
        <select name="" id="">
            <option value="" disabled >Select Category</option>
            @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}" disabled>{{$categoria->nombre}}</option>
            @endforeach
        </select>
        <select name="" id="">
            <option value="" disabled >Select Provider</option>
            @foreach ($proveedores as $proveedor)
                <option value="{{$proveedor->id}}" disabled>{{$proveedor->nombre}}</option>
            @endforeach
        </select>
        <input type="submit" value="Add Product">
    </form>


    <table>
        <thead>
            <th>ID</th>
            <th>Name Product</th>
            <th>Price Product</th>
            <th>Stock</th>
            <th>Create Date</th>
            <th colspan="2">ACTIONS</th>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <th>{{$producto->id}}</th>
                    <th>{{$producto->nombre}}</th>
                    <th>{{$producto->precio}}</th>
                    <th>{{$producto->stock}}</th>
                    <th>{{$producto->created_at->format('Y-m-d-H:i:s')}}</th>
                    <td>
                        <a href="{{route('editar_producto', $producto->id)}}">Edit</a>
                    </td>
                    <td>
                        <a href="{{route('eliminar_producto', $producto->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    
</body>
</html>