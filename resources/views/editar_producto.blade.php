<!DOCTYPE html>
<html lang="en">
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


<body>
    <center>
         <h2>Editar Registro de Productos</h2>
         <br>
         <form action="{{ route('salvar', ['idp' => $productos->idp]) }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <table>
            <tr>
              <td>Id Producto</td>
              <td><input type="text" name="idp" value="{{ $productos->idp }}"  readonly>
          </td>
          </tr>

     <tr>
     <td>Producto:</td>
     <td><input type="text" name="producto" value="{{ $productos->producto }}"></td>
     </tr>

     <tr>
     <td>Codigo:</td>
     <td><input type="text" name="codigo" value="{{ $productos->codigo }}"></td>
     </tr>

     </tr>
     <td>Tipo:</td>
     <td><input type="text" name="Tipo" value="{{ $productos->tipo }}"></td>
     </td>
     </tr>
     </tr>
     <td>Precio:</td>
     <td><input type="text" name="precio" value="{{ $productos->precio }}"></td>
     </td>
     </tr>

<tr>
<td>Foto De Producto:</td>
     <input type="file" name="fotop1">
     <input type="text" name="fotop" value="{{ $productos->fotop }}">
</td>
</tr>          
          <tr>
          <td colspan="2">
               <input type="submit" value="Salvar"> | <a href="{{ route('adminp') }}">Regresar</a>
          </td>
     </tr>
         </table>
     </form>
     </center>
</body>
</html>