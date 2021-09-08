<?PHP
session_start();

include_once '../../controller/utilisateurC.php';
$message="";
 $errorMsg="";
 $userC = new UtilisateurC;
 if ((isset($_POST["confirmpassword"]) &&
	 isset($_POST["password"])) || 
	  (!empty($_POST["confirmpassword"]) &&
     !empty($_POST["password"])))
	{
    $url = $_SERVER['REQUEST_URI'];
    $url_components = parse_url($url); 
    parse_str($url_components['query'], $params); 
    $id=$params['Id']; 
    $userC->updatePassword($id,$_POST["confirmpassword"]);
    header('location:index.php');
   }	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Mot De Passe oublié
					</span>
				</div>

				<form class="login100-form validate-form" id="login-box"  action="" method="POST">
					

					<div class="wrap-input100 validate-input m-b-18" >
						<span class="label-input100">Mot de passe</span>
						<input class="input100" id="login__confirmpassword"  type="password" name="confirmpassword" placeholder="Enter password" required>
						<span class="focus-input100"></span>
					</div>
                    
                    <div style="color:red;padding-left: 5%;" id="error-login"></div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Confirmation Mot de passe</span>
						<input class="input100" id="login__password"  type="password" name="password" placeholder="Enter password" required>
						<span class="focus-input100"></span>
					</div>

                    <div style="color:red;padding-left: 5%;" id="error-password"></div>

					<input type="button" class="login100-form-btn" value="Modifier" onclick="submitForm()" >
                    <div style="color:red"><?PHP echo $errorMsg; ?></div>


				
					

				</form>
			</div>
		</div>
	</div>

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
    <script>
        function submitForm() {
        var confirm=document.getElementById('login__confirmpassword').value;
        var password=document.getElementById('login__password').value;
        if(!password || !confirm){
            document.getElementById("error-password").innerHTML = "Il faut sasir votre mot de passe";
        }else if(password != confirm){
            document.getElementById("error-password").innerHTML = "Mot de passe incorrect";
        }else{
            document.getElementById('login-box').submit();
        }
        }
    </script>



	

</body>
</html>