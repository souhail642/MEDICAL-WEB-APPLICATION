<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from puffintheme.com/demo/epic/hr/main/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Oct 2019 22:49:34 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Epic :: Register</title>

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
           
            <div class="card-body">
			<form  action="ajouterutilisateur.php" method="post"  >
                <div class="card-title">Create new account</div>
                <div class="form-group">
                    <label class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Enter name">
                </div>
				  <div class="form-group">
                    <label class="form-label">Prenom</label>
                    <input type="text" name="prenom" class="form-control" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                </div>
				 <div class="form-group">
                    <label class="form-label">Login</label>
                    <input type="text" name="login" class="form-control" placeholder="Enter name">
                </div>
				
                <div class="form-group">
                    <label class="form-label">Mot de passe</label>
                    <input type="password"  name="mdp" class="form-control" placeholder="Password">
                </div>
				 <div class="form-group">
					  <label   class="form-label">Image</label>
					 <input class="form-control"  id="image" type="file" name="image" accept="image/png, image/jpeg" required > 
					  
					 </div>
				 <div class="form-group">
				  <label class="form-label">Role</label>
									 <select  class="custom-select" name="role" id="speciality" required >
                                                <option value="Role" >Role</option>
                                                <option value="Docteur">Docteur</option>
                                                <option value="fourniseur">Fourniseur</option>
                                                <option value="utilisateur">Utilisateur</option>
                                            </select>
                                     
                                     
									 </div>
				
               
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Create new account</button>
                </div>
				</form>
            </div>
			
			
			
			
			
            <div class="text-center text-muted">
                Already have account? <a href="login.php">Sign in</a>
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

<!-- Mirrored from puffintheme.com/demo/epic/hr/main/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Oct 2019 22:49:34 GMT -->
</html>