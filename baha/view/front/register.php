<?php
    include_once '../../controller/utilisateurC.php';
    include_once '../../model/utilisateur.php';


    $error = "";

    // create user
    $user = null;
	$errorMsg="";

    // create an instance of the controller
    $userC = new utilisateurC();
    if (
        
        isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["date"]) &&
        isset($_POST["numero"]) &&
        isset($_POST["email"]) &&
       isset($_POST["password"]) 
       ) 
        
     {
        if (
            
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) &&  
            !empty($_POST["date"]) && 
            !empty($_POST["numero"]) && 
            !empty($_POST["email"]) && 
			 !empty($_POST["password"])
            
        ) {
			$message=$userC->checkmail($_POST["email"]);
			if($message=="Incorrect"){
				$user = new utilisateur(
					$_POST['nom'],
					$_POST['prenom'],
					$_POST['date'],
					$_POST['numero'], 
					$_POST['email'], 
	 
					$_POST['password'],
					
					
				);
				$userC->ajouterutilisateur($user);
				header('Location:login.php');
			}
			else {
				$errorMsg="Email existant";

			}
           
        }
       
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
						Register
					</span>
				</div>


				<form class="login100-form validate-form" action="" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Nom</span>
						<input class="input100" type="text" name="nom" placeholder="Entrer nom" required  >
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Prenom</span>
						<input class="input100" type="text" name="prenom" placeholder="Entrer prenom" required  >
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Date</span>
						<input class="input100" type="date" name="date"  value="2021-09-24" min="1950-01-01" max="2021-12-31" required  >
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Numero</span>
						<input class="input100" type="text" name="numero" placeholder="12345678"  pattern="[0-9]{2}[0-9]{3}[0-9]{3}" required >
						<span class="focus-input100"></span>
					</div> 

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="azerty@gmail.com" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Entrer adresse mail" required  >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password" minlength="6" maxlength="20" required >
						<span class="focus-input100"></span>
					</div>

					
					<div style="color:red"><?PHP echo $errorMsg; ?></div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Create account 
						</button>
					</div>
					<br>
					<br>
					<br>
					
					<div class="container">
						<a href="index.php">Retour a l'acceuil</a>
					</div>
			
			</div>
		</div>
    </from>
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

</body>
</html>