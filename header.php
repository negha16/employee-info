
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header1.css">
		<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-latest.min.js"></script> 
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>XYZ</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	<body>

	<header>
		 <div class="header ">	
		 	<div class="header-left"> 		 	
		 		<h3 class="logo"><font face="Verdana">XYZ</font></h3>
		 	</div>
		 	<div class="header-right">
				<div class="dropdown show account ">
  					<a class=" dropdown-content" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						 <i class="my-account fa fa-user"></i>
  					</a>
  					<div class="dropdown-menu profile" aria-labelledby="dropdownMenuLink">
 <?php
include 'config.php'; 
if (!empty($_SESSION["ID"])||!empty($_SESSION["USER_NAME"]))
{
	?>
   <a  class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Sign out</a> 
 <?php
}
else
	{ 
	 ?> 

    	<a class="dropdown-item"> Not signed in</a>
 <?php
}

?>
  					
    				
  					</div>
				</div>		  

       			<div id="google_translate_element"></div>


<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages : 'ml,ta,en'}, 'google_translate_element');
}
</script>


<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  			</div>
  		</div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark "><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    		<div class="collapse navbar-collapse" id="navbarColor02">
        		<ul class="navbar-nav mr-auto mx-4">
            		<li class="nav-item mx-4"> <a class="nav-link" href="index.php" data-abc="true">User Login</a> </li>
            		<li class="nav-item mx-4"> <a class="nav-link" href="admin-login.php" data-abc="true">Admin Login</a> </li>

       	 		</ul>
			</div>
			
		</nav>
	</header>

   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  

 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
		
		$(window).load(function () {
  $(".goog-logo-link").parent().remove();
  $(".goog-te-gadget").html(
    $(".goog-te-gadget").html().replace('&nbsp;&nbsp;Powered by ', '')
  );
});
	</script>
</body>
</head>
