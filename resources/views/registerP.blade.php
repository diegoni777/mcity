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
<center>
<body>
    <h1></h1>
        <div class="container">
            <form action="{{ route ( 'guarda_productos' )}}" method="POST" enctype = 'multipart/form-data'>

            {{ csrf_field() }}

                <div class="wrap-input100">
                    <label for="">Id producto</label>
                    <input class="input100" type="text" name="idp" value="{{$iddespues}}" placeholder="ID" disabled >
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Producto:</label>
                    <input class="input100" type="text" name="producto" value="" placeholder="Nombre Producto" >
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Codigo:</label>
                    <input class="input100" type="text" name="codigo" value="" placeholder="codigo" >
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Tipo de Producto</label>
                    <input class="input100" type="text" name="tipo" value="" placeholder="tipo" >
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Precio</label>
                    <input class="input100" type="text" name="precio" value="" placeholder="precio" >
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Foto del producto</label>
                    <input class="input100" type="file" name="fotop" value="" placeholder="ID" >
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div><br>
    
    
                <div>
                    <button>guardar Producto</button>
                </div>
            </form>
        </div>
</center>
</body>
</html>