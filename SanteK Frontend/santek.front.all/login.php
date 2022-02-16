<?php
session_start();
include_once '../Model/Utilisateur.php';
include_once '../Controller/UtilisateurC.php';
$message="";
$userC = new UtilisateurC();
if (isset($_POST["email"]) &&
    isset($_POST["password"])) {
    if (!empty($_POST["email"]) &&
        !empty($_POST["password"]))
    {   $message=$userC->connexionUser($_POST["email"],$_POST["password"]);
	$user=$userC->recuperuser($_POST["email"],$_POST["password"]);

		
	   //  avec l'email à l'intérieur
		
        if($message!="pseudo ou le mot de passe est incorrect"){
        
	
	
foreach($user as $row){
	 $_SESSION['id']=$row['id'];		
		  $_SESSION['image']=$row['image'];
		   $_SESSION['nom']=$row['nom'];
   $_SESSION['prenom']=$row['prenom'];
       $_SESSION['role']=$row['role'];  
	} 
	  $_SESSION['e'] =$_POST["email"] ;
        $_SESSION['p'] =$_POST["password"];

 if ($row['role']=="utilisateur")
 {
		header('Location:index-2.php');
 }
 
 if ($row['role']=="docteur")
 {
		header('Location:http://localhost/Projet-Web-main/Mes%20Sites%20Web/Santek%20Backend/androthemes.com/themes/html/medjestic/pages/form/ajouterarticle.php');
 }		
		}
        else{
            $message='pseudo ou le mot de passe est incorrect';
        }}
    else
        $message = "Missing information";}
?>
<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from puffintheme.com/demo/epic/hr/main/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Oct 2019 22:49:32 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Epic :: Login</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

<!-- Core css -->
<link rel="stylesheet" href="yass/css/main.css"/>
<link rel="stylesheet" href="yass/css/theme2.css"/>

</head>
<body class="font-montserrat">

<div class="auth">
    <div class="auth_left">
	
        <div class="card">
            <div class="text-center mb-2">
                <a class="header-brand" href="index-2.html"><i class="fe fe-command brand-logo"></i></a>
            </div>
            <div class="card-body">
			<form name="frmUser" method="post" action="">
   <div class="message">
      <?php if($message!="") { echo $message; } ?>
    </div>
                <div class="card-title">Login to your account</div>
              
                <div class="form-group">
				<label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label class="form-label">Password<a href="forgot-password.html" class="float-right small">I forgot password</a></label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" />
                    <span class="custom-control-label">Remember me</span>
                    </label>
                </div>
				
                <div class="form-footer">
                    <input type="submit" class="btn btn-primary btn-block" title="" value="Sign in" >
                </div>
				</form >
            </div>
            <div class="text-center text-muted">
                Don't have account yet? <a href="register.html">Sign up</a>
            </div>
        </div> 
		
    </div>
    <div class="auth_right">
        <div class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="slider1.svg" class="img-fluid" alt="login page" />
                    <div class="px-4 mt-4">
                        <h4>Fully Responsive</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="slider2.svg" class="img-fluid" alt="login page" />
                    <div class="px-4 mt-4">
                        <h4>Quality Code and Easy Customizability</h4>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="slider3.svg" class="img-fluid" alt="login page" />
                    <div class="px-4 mt-4">
                        <h4>Cross Browser Compatibility</h4>
                        <p>Overview We're a group of women who want to learn JavaScript.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../assets/bundles/lib.vendor.bundle.js"></script>
<script src="../assets/js/core.js"></script>
</body>

<!-- Mirrored from puffintheme.com/demo/epic/hr/main/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Oct 2019 22:49:34 GMT -->
</html>