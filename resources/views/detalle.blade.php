<head>
<link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Productos</title>
    <div class="container mt-2">
        <div class="card">
            <div class="card-body bg-primary mt-2 ">
              
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
   
    
</head>
    
</head>
<center>
    <body>
        <h2>Detalle de Producto: {{ $productos->producto }}</h2>
        <hr>
    <table>
        <tr>
            <td><img src="{{ asset('archivos/'.$productos->fotop) }}" width="200px"></td>
        <tr>
            <td>idp:</td>
            <td> {{ $productos->idp }} </td>
</tr>
<tr>
            <td>Producto:</td>
            <td> {{ $productos->producto }} </td>
</tr>
<tr>
            <td>Codigo:</td>
            <td> {{ $productos->codigo }} </td>
</tr>
<tr>
            <td>Tipo:</td>
            <td> {{ $productos->tipo }} </td>
</tr>
<tr>
            <td>Precio:</td>
            <td> {{ $productos->precio }} </td>
</tr>

           
<tr>
    <td colspan="2">
        <a href="{{ route('adminp') }}">Regresar</a>
        <td>
</tr>

    </table>    
</body>
</html>