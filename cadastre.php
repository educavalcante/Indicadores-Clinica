<?
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastre-se - Suporte CPC Brasil</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/Favicon.svg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<!-- <div class="login100-pic js-tilt" data-tilt>
					<img src="images/logoteste.png" alt="IMG">
				</div> -->

				<form class="login100-form validate-form" method="post" action="index.php">
					<a href="index.php"></a><span class="login100-form-title">
						Cadastre-se
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Por favor, informe seu codigo de funcionário!">
						<input class="input100" type="text" name="codigo" placeholder="Código de funcionário">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Por favor, informe seu nome!">
						<input class="input100" type="text" name="codigo" placeholder="Nome">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Por favor, informe seu E-mail!">
						<input class="input100" type="text" name="codigo" placeholder="E-mail">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Por favor, informe telefone!">
						<input class="input100" type="text" name="codigo" placeholder="Telefone">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Por favor, informe sua senha!">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							entrar
						</button>
						<p>Não tem conta? <a href="cadastre.php"><strong>Cadastre-se</strong></a></p>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							
						</span>
						<a class="txt2" href="#">
							
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							
							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<!-- <script>
	function checkLogin() {
  var username = document.getElementById("Codigo").value;
  var password = document.getElementById("Senha").value;

  if (username == "Codigo" && password == "Senha") {
    // login com sucesso, redirecione para outra página
    window.location.href = "index.php";
  } else {
    // mostre o alerta de login ou senha incorretos
    alert("Login ou senha incorretos");
  }
}
</script> -->
</body>
</html>