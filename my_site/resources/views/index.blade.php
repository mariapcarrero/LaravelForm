<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ingreso</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">
	<link href="{{ asset('/js/bootstrap.min.js') }}" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>
	<form method='post' action="{{ action('PagesController@save') }}">

     <!-- Message -->
     @if(Session::has('message'))
       <p >{{ Session::get('message') }}</p>
     @endif

   	{{ csrf_field() }}  
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Bienvenido
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
					<!-- Here begin the input boxes, first one is the Name -->
					<div class="wrap-input100" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="name" pattern="[A-Za-z]+" title="El nombre solo debe tener letras" required>
						<span class="focus-input100" data-placeholder="Nombre"></span>
					</div>
					<!-- last name -->
					<div class="wrap-input100" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="lastname" pattern="[A-Za-z]+" title="El apellido solo debe tener letras" required>
						<span class="focus-input100" data-placeholder="Apellido"></span>
					</div>
					<!-- age -->
					<div class="wrap-input100" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="age" pattern="^[0-9]{1,3}$" title="La edad solo debe tener numeros y no mas de tres numeros" required>
						<span class="focus-input100" data-placeholder="Edad"></span>
					</div>
					<!-- email -->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="email" name="email" title="Recuerda que el correo debe ser a@b.c" required>
						<span class="focus-input100" data-placeholder="Correo"></span>
					</div>
					<!-- password -->

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100" data-placeholder="Contraseña"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<!--<button class="login100-form-btn btn-btn-primary"> --> 
							<input type="submit" name="submit" class="login100-form-btn" value="Ingresar"/>
							<!--	Ingresar
							</button> -->
						</div>
					</div>
					@isset($message)
					<div class="alert alert-success">
					<strong>{{$message}}</strong>
					</div>
					@endif	

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/js/main.js') }}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	

</body>
</html>