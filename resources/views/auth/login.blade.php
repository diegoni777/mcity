<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Login Mcity</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset ('Login/css/login.css') }}">
    <!--Stylesheet-->
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="{{ route ('valida') }}" method="POST">
    {{ csrf_field() }}

        <h3>Mcity</h3>
        @if (session('status'))
		    <div class="alert alert-danger">
		        {{ session('status') }}
		    </div>
	    @endif

        <label for="username">Correo</label>
        <input type="text" placeholder="Ingresa tu correo Electronico" name="correo" id="correo" >

        <label for="password">Contraseña</label>
        <input type="password" placeholder="Contraseña" name="password" id="password">

        <button>Log In</button>
        <div class="social">
            <div class="go"><a href="{{ route('alta_usuarios') }}">Registrarme</a></div>
        </div>

    </form>

</body>
</html>