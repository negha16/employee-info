<?php
include 'auth.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/user-profile560.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
</head>
<body>
<?php
	include "header.php";
?>
<div class="user-profile">
    <div class="container">
        <div class="row">
                       <div class="col-sm-4" style="background-color: purple;">
                <div class="account-sidebar ">
                    <div class="author-card pb-3" style="text-align:center;">            
                        <div class="author-card-profile">
                            <div class="author-card-avatar"><img class="rounded-circle mt-2" src="images/profile.jpg" width=200px height="200px">
                            </div>
                          <div class="author-card-details"  style="color:yellow;">
                                <h5 class="author-card-name text-lg"><?php echo $singleRow['NAME']; ?></h5><br>
                            </div>
                        </div>
                    </div>
                         <br><br><br>
                    <div class="wizard" >
               <nav class="sidebar card py-2 mb-4">
<ul class="nav flex-column" id="nav_accordion"> 
    <li class="nav-item">
                <a class="nav-link" href="emp_profile.php"> profile </a>
        <a class="nav-link" href="passwordsetting.php"> change password </a>
    </li>  
</ul>

                    </div>
                </div>
            </div>
             <div class="col-sm-8">
              <div class="profile">
<form action="" method="post" enctype="multipart/form-data">
                    <h3 class="heading mb-3" style="text-align:center;margin-top: 5%;">Profile</h3>
         
                    <div class="row">
                      <div class="form-group col-sm-9 ">
                        <label for="PASS_WORD">Current Password </label>
                        <input type="password" class="form-control" id="PASS_WORD" name="PASS_WORD" placeholder="Enter current password "  value=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                                                  <i class="far fa-eye-slash" id="hide3" onclick="myFunction3()"style="float: right; margin-top: -25px; cursor: pointer;"></i>
                       <i class="far fa-eye" id="show3" onclick="myFunction3()" style="float: right; margin-top: -25px; cursor: pointer;display: none;" ></i>
                      </div >
                          </div>
                    <div class="row">
                        <div class="form-group  col-sm-9">
                            <label for="NPASS_WORD">New Password </label>
                        <input type="password" class="form-control" id="NEW_PASS_WORD" name="NEW_PASS_WORD" placeholder="Enter a strong password "  value=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                          <i class="far fa-eye-slash" id="hide" onclick="myFunction()"style="float: right; margin-top: -25px; cursor: pointer;"></i>
                       <i class="far fa-eye" id="show" onclick="myFunction()" style="float: right; margin-top: -25px; cursor: pointer;display: none;" ></i>
                        </div>
                    </div>
                                
                        <div class="row"> 
                      <div class="form-group  col-sm-9 ">
                     <label for="CPASS_WORD">Confirm Password </label>
                        <input type="password" class="form-control" id="CPASS_WORD" placeholder="Confirm password" value="" >
                          <i class="far fa-eye-slash" id="hide1" onclick="myFunction1()"style="float: right; margin-top: -25px; cursor: pointer;"></i>
                       <i class="far fa-eye" id="show1" onclick="myFunction1()" style="float: right; margin-top: -25px; cursor: pointer;display: none;" ></i>

                        <span id="messages" style="color:red;"> </span>
                      </div>
                  </div>
                  
                  <div class="buttons mb-3" style="text-align:center">
                        <input type="submit" name="submit" class="btn btn-primary mt-2" value="Change" >
                        <input type="submit" name="cancel" class="btn btn-danger mt-2" href="#" value="cancel" >
                  
                    </div> 
            
                </div>
            </div>
        </div>

    </form>  
</div>
                
            </div>
        </div>
    </div>
</div>
    <script>
       function myFunction(){
        var x=document.getElementById("NEW_PASS_WORD");
        if(x.type==="password"){
            x.type="text-area";
            document.getElementById('show').style.display="inline-block";
            
            document.getElementById('hide').style.display="none";
        }
        else{
            x.type="password";
            document.getElementById('show').style.display="none";
            document.getElementById('hide').style.display="inline-block";

        }
       }
    </script>
        <script>
       function myFunction1(){
        var y=document.getElementById("CPASS_WORD");
        if(y.type==="password"){
            y.type="text-area";
            document.getElementById('show1').style.display="inline-block";
            
            document.getElementById('hide1').style.display="none";
        }
        else{
            y.type="password";
            document.getElementById('show1').style.display="none";
            document.getElementById('hide1').style.display="inline-block";

        }
       }
    </script>
<script>
       function myFunction3(){
        var z=document.getElementById("PASS_WORD");
        if(z.type==="password"){
            z.type="text-area";
            document.getElementById('show3').style.display="inline-block";
            
            document.getElementById('hide3').style.display="none";
        }
        else{
            z.type="password";
            document.getElementById('show3').style.display="none";
            document.getElementById('hide3').style.display="inline-block";

        }
       }
    </script>


<script type="text/javascript">
   var password = document.getElementById("NEW_PASS_WORD")
  var confirm_password = document.getElementById("CPASS_WORD");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

<?php
if(isset($_POST['submit'])){
       $PASS_WORD=$_POST['PASS_WORD'];
    $PASSWORD = hash("sha256", $PASS_WORD);
if ($PASSWORD == $singleRow["PASS_WORD"]) {  
      $NEW_PASS_WORD=$_POST['NEW_PASS_WORD'];
    $NEW_PASS_WORD = hash("sha256", $NEW_PASS_WORD);
        mysqli_query($conn, "UPDATE emp_info set PASS_WORD= '$NEW_PASS_WORD' WHERE ID='$id'");
        echo '<script>alert("password changed")</script>';
    } else{ 

   echo '<script>alert("old password is not correct  ")</script>';
    }
    }
?>	
<?php
	include "footer1.php";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
