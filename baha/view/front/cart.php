<?php

include_once "manage_cart.php";
include_once '../../controller/commandeC.php';
include_once '../../model/commande.php';


	if (isset($_SESSION['id']) && ! empty($_SESSION['id']) && isset($_SESSION['prenom']) && ! empty($_SESSION['prenom']) &&  isset($_SESSION['nom']) && ! empty($_SESSION['nom']))
	{
		$id=$_SESSION['id'];
		$user=$_SESSION['prenom'] .' '. $_SESSION['nom'];
		$message="Se Deconnecter";
		$prenom=$_SESSION['prenom'];
		$nom=$_SESSION['nom'];
		$email=$_SESSION['email'];
		$numero=$_SESSION['numero'];
		
		
		


	}
	else{
	$user="";
	$prenom="";
	$nom="";
	$email="";
	$numero="";
	$message="Se Connecter";
	
     }



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Winkel - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-black">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Winkel</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">Shop</a>
                <a class="dropdown-item" href="cart.php">Cart</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	         
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
			  <li class="nav-item active"><a  class="nav-link"><?PHP echo $user; ?> <br> </a></li>
			  <li class="nav-item active"><a href="deconnexion.php" class="nav-link"><?PHP echo $message; ?> <br> </a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						       
								<th scope="col">Serial No</th>
						        <th  scope="col">Product</th>
						        <th  scope="col">Price</th>
						        <th  scope="col">Quantity</th>
						        <th  scope="col">Montant</th>
								<th  scope="col">Remove</th>
								<tr>
                   
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center">
						     
						        
						        
						        
						             
								<?php
                        $total=0;
						$produit="";
						$idP="";

                        if(isset($_SESSION['cart']))
                        {
                        foreach($_SESSION['cart']as $key => $value)
                        {
                            $sr=$key+1;
                            $prod = $value['Item_Name']. " * $value[Quantity] ";
							$produit=$produit."+ ".$prod;
							$idP=$idP.$value['Item_id'];
							

							$total=$total+($value['Price']*$value['Quantity']);
                            echo"
                            <tr>
							
                            <td>$sr</td>
                            <td>$value[Item_Name]</td>
                            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]' </td>
                            <td>
							 <form action='manage_cart.php' method='POST'>
							  <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
							  <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
							  </form>
							  </td>
                            <td class='itotal'></td>
							<td>
                            <form action='manage_cart.php' method='POST'>
                            <button name='Remove_Item' class='btn btn-default add-to-cart'>REMOVE</button>
                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                            </form>
                            </td>
							
                            ";   

                        }
						
                    }
                        ?>
						
						</tr>

						    </tbody>
							
						  </table>
					  </div>
					  
								 
    			</div>
    		</div>
    	
			</div>
		</section>
<?php
  if (
	isset($_POST["prenom"]) &&
	isset($_POST["nom"]) && 
	isset($_POST["adresse"]) &&
	isset($_POST["tel"]) &&
		isset($_POST["email"]) 
   ) 
	
 {
	if (
		!empty($_POST["prenom"]) &&  
		!empty($_POST["nom"]) && 
		!empty($_POST["adresse"]) &&  
		!empty($_POST["tel"]) && 
			  !empty($_POST["email"])
		
	)  {
		$commande = new commande(
			$_POST['prenom'],
			$_POST['nom'],
			$_POST['tel'],
			$_POST['adresse'], 
			$_POST['email'],
			$_POST['produit'],
			$_POST['total'],
		   
			
			
		);
		$commandeC = new commandeC();
		$commandeC->ajoutercommande($commande);
	}
	else
		$error = "Missing information";
}


?>

<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 ftco-animate">
							<h3 class="mb-4 billing-heading">Commandes Sans Facture</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
					  <form action="" method="POST" class="billing-form">

	                <div class="form-group">
	                	<label for="firstname">Firt Name</label>
	                  <input id="prenom" name="prenom" type="text" class="form-control" value="<?php echo $prenom;?>">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input id="nom" name="nom" type="text" class="form-control" value="<?php echo $nom;?>">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">Adress</label>
		            		<div class="select-wrap">
		                  <select id="adresse" name="adresse" class="form-control">
		                  	<option value="Bizerte">Bizerte</option>
		                    <option value="Tunis">Tunis</option>
		                    <option value="Sousse">Sousse</option>
		                    <option value="Beja">Beja</option>
		                    <option value="Sfax">Sfax</option>
		                    <option value="Monastir">Monastir</option>
		                  </select>
		                </div>
		            	</div>
		            </div>
		          
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input id="tel" name="tel" type="text" class="form-control" value="<?php echo $numero;?>">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input  id="email" name="email" type="email" class="form-control"value="<?php echo $email;?>">
	                </div>
                </div>
				<div class="col-md-6">
	                <div class="form-group">
	                  <input  id="produit" name="produit" type="hidden" class="form-control" value="<?php echo $produit; ?>">
	                </div>
                </div>
				<div class="col-md-6">
	                <div class="form-group">
	                  <input  id="total" name="total" type="hidden" class="form-control" value="<?php echo $total; ?>">
	                </div>
                </div>

	            </div>
	        <!-- END -->
	        
	
	          	<div class="col-md">
	          		<div class="cart-detail bg-light p-3 p-md-4">
	          			
									<div class="form-group">
									<h3 class="billing-heading mb-4">Total en Dinar</h3>
	          			<p class="d-flex">
		    					<h5 id='gtotal'></h5>
		    					</p>
									
								<button type="submit"  class="btn btn-primary" value="">Valider</button>

								</div>
	          	</div>
	          </div>
	</form>
          </div> <!-- .col-md-8 -->
        </div>
      </div>


	
	  <br><br><br><br><br><br><br><br><hr><br><br><br><br><br><br><br><br><br><br>




	  <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 ftco-animate">
							<h3 class="mb-4 billing-heading">Commandes Avec Facture</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
					  <form action="facture.php" method="POST" class="billing-form">

	                <div class="form-group">
	                	<label for="firstname">Firt Name</label>
	                  <input id="prenom" name="prenom" type="text" class="form-control" value="<?php echo $prenom;?>">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input id="nom" name="nom" type="text" class="form-control" value="<?php echo $nom;?>">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">Adress</label>
		            		<div class="select-wrap">
		                  <select id="adresse" name="adresse" class="form-control">
		                  	<option value="Bizerte">Bizerte</option>
		                    <option value="Tunis">Tunis</option>
		                    <option value="Sousse">Sousse</option>
		                    <option value="Beja">Beja</option>
		                    <option value="Sfax">Sfax</option>
		                    <option value="Monastir">Monastir</option>
		                  </select>
		                </div>
		            	</div>
		            </div>
		          
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input id="tel" name="tel" type="text" class="form-control" value="<?php echo $numero;?>">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input  id="email" name="email" type="email" class="form-control"value="<?php echo $email;?>">
	                </div>
                </div>
				<div class="col-md-6">
	                <div class="form-group">
	                  <input  id="produit" name="produit" type="hidden" class="form-control" value="<?php echo $produit; ?>">
	                </div>
                </div>
				<div class="col-md-6">
	                <div class="form-group">
	                  <input  id="total" name="total" type="hidden" class="form-control" value="<?php echo $total; ?>">
	                </div>
                </div>

	            </div>
	        <!-- END -->
	        
	
	          	<div class="col-md">
	          		<div class="cart-detail bg-light p-3 p-md-4">
	          			
									<div class="form-group">
									<h3 class="billing-heading mb-4">Total en Dinar</h3>
	          			<p class="d-flex">
		    					<h5 id='gtotal'></h5>
		    					</p>
									
								<button type="submit"  class="btn btn-primary" value="">Valider</button>

								</div>
	          	</div>
	          </div>
	</form>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
	  
	 
    </section> <!-- .section -->

		<script>
			var gt=0;
			var iprice=document.getElementsByClassName('iprice');
			var iquantity=document.getElementsByClassName('iquantity');
			var itotal=document.getElementsByClassName('itotal');
			var gtotal=document.getElementById('gtotal');
			var gtot=document.getElementById('gtot');

			function subTotal(){
				gt=0;
				for(i=0;i<iprice.length;i++){
					itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
					gt=gt+(iprice[i].value)*(iquantity[i].value);
				}
					gtotal.innerText=gt;
					gtot.innerText=gt;				
					
			}
			subTotal();
			
			
			</script>
			

    <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Winkel</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>