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
        <h2>Detalle de Usuario: {{ $usuarios->nombre }}</h2>
        <hr>
    <table>
        <tr>
            <td><img src="{{ asset('archivos/'.$usuarios->fotou) }}" width="200px"></td>
        <tr>
            <td>idu:</td>
            <td> {{ $usuarios->idu }} </td>
</tr>
<tr>
            <td>Nombre:</td>
            <td> {{ $usuarios->nombre}} </td>
</tr>
<tr>
            <td>Empresa:</td>
            <td> {{ $usuarios->empresa }} </td>
</tr>
<tr>
            <td>Detalles:</td>
            <td> {{ $usuarios->detalles }} </td>
</tr>
<tr>
            <td>Tipo de Usuario:</td>
            <td> {{ $usuarios->tipou }} </td>
</tr>

           
<tr>
    <td colspan="2">
        <a href="{{ route('admin') }}">Regresar</a>
        <td>
</tr>

    </table>    
</body>
</html>