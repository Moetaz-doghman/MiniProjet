<?PHP
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';
include_once '../../controller/utilisateurC.php';

 $message="";
 $errorMsg="";
 $userC = new utilisateurC;
 if (isset($_POST["email"]) && !empty($_POST["email"]))
	{
	   $message=$userC->checkmail($_POST["email"]);
	   if($message=="Incorrect"){
		    $errorMsg="Il faut saisir un email valide";
	   }else{
      $errorMsg=$message;
      // Set required parameters for making an SMTP connection
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->Mailer = "smtp";
				$mail->SMTPDebug  = 1;  
				$mail->SMTPAuth   = TRUE;
				$mail->SMTPSecure = "tls";
				$mail->Port       = 587;
				$mail->Host       = "smtp.gmail.com";
        $mail->Username = 'nature.pet1@gmail.com';
        $mail->Password = '191JMT2413';
			

				// Set the required parameters for email header and body
				$mail->IsHTML(true);
				$mail->AddAddress($_POST["email"], $_POST["email"]);
				$mail->setFrom('nature.pet1@gmail.com', 'NaturePet');
				$mail->Subject = "Modification de ton mot de passe";
				$content = "<b>Bonjour , Pour modifier ton mot de passe il faut cliquer sur ce <a href='http://localhost//miniprojet/baha/view/front/updatepwd.php?Id=$message'>Lien</a></b>";

				//Send the email and catch required exceptions:
				$mail->MsgHTML($content); 
				if(!$mail->Send()) {
          
					echo "<script>alert('Mail n'est pas envoyé );</script>";
				} else {
          $_SESSION['message'] = 'Votre demande de modification a été envoyée par mail !!';
              header('location:Index.php');       
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
				

			<form action="" method="POST" class="form login" id="login-box">
				<div class="form__field">
				<label for="login__username" >
				<span class="label-input100">Email</span></label>
				<input id="login__username" type="text" name="email"  class="input100" placeholder="Email" >
				</div>
				<div style="color:red;padding-left: 5%;" id="error-login"></div>
				<div class="form__field">
				<input type="button" value="Envoyer" onclick="submitForm()" style="background-color: #198ae3;color: var(--loginSubmitColor);font-weight: 700;text-transform: uppercase;border-radius: var(--loginBorderRadus);padding: 1rem;width: 100%;cursor: pointer;">
				</div>
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
  var login=document.getElementById('login__username').value;
  if(!login){
    document.getElementById("error-login").innerHTML = "Pour réinitialiser votre mot de passe il faut saisir votre addresse mail svp!";
  }else{
    document.getElementById('login-box').submit();
  }
}
</script>


	

</body>
</html>
