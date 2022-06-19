<?php
include 'auth.php'; 
if(isset($_POST['submit'])){
    $NAME=$_POST['NAME'];
    $DOB=$_POST['DOB'];
    $GEN=$_POST['GEN'];
    $ADDR=$_POST['ADDR'];
    $MOBL=$_POST['MOBL'];
 $filename = $_FILES['ADDR_PROOF']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['ADDR_PROOF']['tmp_name'];
    $size = $_FILES['ADDR_PROOF']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['ADDR_PROOF']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    }
 
    $update=" UPDATE  emp_info SET NAME='$NAME', DOB='$DOB',GEN='$GEN',ADDR='$ADDR', MOBL='$MOBL',ADDR_PROOF='$filename' where ID='$id'";
    $update_run=mysqli_query($conn,$update); 
    if($update_run){
        header("location:emp_profile.php");
    }
 

    else{
 echo '<script>alert("error.")</script>';
    }

}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/user-profile560.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<title>soltox</title>
</head>
<body>
    <?php include("header.php");?>  
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
</nav>

                    </div>
                </div>
            </div>
             <div class="col-sm-8">
              <div class="profile">
<form action="" method="post" enctype="multipart/form-data">
                    <h3 class="heading mb-3" style="text-align:center;margin-top: 5%;">Profile</h3>
         
                        <div class="row">
                  <div class="form-group col-sm-6">
                        <label for="NAME">Name</label>
                        <input name="NAME" type="text" class="form-control" id="NAME" value="<?php echo $singleRow['NAME']; ?>">
                      </div>
                        <div class="form-group col-sm-6">
                        <label for="DOB">DOB</label>
                        <input name="DOB" type="date" class="form-control" id="DOB"  value="<?php echo $singleRow['DOB']; ?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-sm-9 ">
                        <div >Gender<select class="form-select"id="inputGroupSelect02" name="GEN">
                        <option value='<?php echo $singleRow['GEN']; ?>'><?php echo $singleRow['GEN']; ?></option>

                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    <option value="Transgender">Transgender</option>
                                </select required>
                        </div >
                      </div >
                          </div>
                    <div class="row">
                        <div class="form-group  col-sm-9">
                            <label for="ADDR">Address</label>
                            <textarea name="ADDR" cols="20" rows="5" class="form-control" id="ADDR"value=><?php echo $singleRow['ADDR']; ?></textarea>
                        </div>
                    </div>
                                
                        <div class="row"> 
                      <div class="form-group  col-sm-9 ">
                        <label for="MOBL">Mobile Number</label>
                        <input name="MOBL" class="form-control" id="MOBL"type="text" pattern="[0-9]{10}" title="Enter your mobile number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "10 "value="<?php echo $singleRow['MOBL']; ?>">
                      </div>
                  </div>
                    <div class="row"> 
                        <div class="form-group  col-sm-9">
                        <label for="ADDR_PROOF">Upload AadharCard(PDF format )</label>
                        <input name="ADDR_PROOF" type="file" class="form-control" id="ADDR_PROOF"><a href="uploads/<?php echo $singleRow['ADDR_PROOF'] ?>" target="_blank">view file</a>
                      </div>
                    </div>
                  
                  <div class="buttons mb-3" style="text-align:center">
                        <input type="submit" name="submit" class="btn btn-primary mt-2" value="submit" >
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
     <?php 
    include("footer1.php");
?>
</body>
</html>

  

