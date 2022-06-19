<?php include ('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	
</head>
<body>
<?php
	include "header.php";

?>


<div class="signup">
<form action="" method="post" enctype="multipart/form-data">
		<div class="container">
			<div class="row">
				<div class="form col-sm-9">
					<h3>Registration form</h3>
					<hr class="mb-3"><b>
						<div class="row">
				  <div class="form-group col-sm-6">
					    <label for="NAME"> Name</label>
					    <input type="text" class="form-control" id="NAME" name="NAME" placeholder="Enter name " required>
					  </div>
					    <div class="form-group col-sm-6">
					    <label for="DOB">DOB</label>
					    <input type="date" class="form-control" id="DOB" name="DOB"  required>
					  </div>
					</div>
					<div class="row">
					  <div class="form-group col-sm-6">
				    <div >Gender<select class="form-select"id="inputGroupSelect02" name="GEN">
				    	<option value=''>------- Select Gen --------</option>

                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    <option value="Transgender">Transgender</option>
                                </select required>
					  </div >
					</div>
					  	<div class="form-group col-sm-6">
			      			<label for="ADDR">Address</label>
							<textarea name="ADDR" cols="20" rows="5" class="form-control" id="ADDR" placeholder="Enter full address" required></textarea>
			      		</div>
			      	</div>
			      	<div class="row"> 
 					  <div class="form-group col-sm-6">
					    <label for="MOBL">Mobile Number</label>
					    <input type="tel" class="form-control" id="MOBL" name="MOBL" placeholder="012-3456-789" pattern="[0-9]{10}" title="Enter only number and only from 0 to 9" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number" maxlength = "10 " required>
					  </div>

						<div class="form-group col-sm-6">
					    <label for="ADDR_PROOF">Upload AadharCard(only PDF,docx,zip format )</label>
					      <input type="file" class="form-control" id="ADDR_PROOF" name="ADDR_PROOF"  >

					  </div>
					</div>
			      			<div class="row">
					  <div class="form-group col-sm-6">
					    <label for="PASS_WORD"> Password </label>
					    <div class="password">
					    <input type="password" class="form-control" name="PASS_WORD" id="PASS_WORD" placeholder="Enter a strong password "  value=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
					       <i class="far fa-eye-slash" id="hide" onclick="myFunction()"style="float: right; margin-top: -25px; cursor: pointer;"></i>
					   <i class="far fa-eye" id="show" onclick="myFunction()" style="float: right; margin-top: -25px; cursor: pointer;display: none;" ></i>
					  </div>	
					  </div>	
					    <div class="form-group col-sm-6">
					    <label for="CPASS_WORD">Confirm Password </label>
					    	    <div class="password">
					    <input type="password" class="form-control" id="CPASS_WORD" placeholder="Confirm password" value="" required>
					          <i class="far fa-eye-slash" id="hide1" onclick="myFunction1()"style="float: right; margin-top: -25px; cursor: pointer;"></i>
					   <i class="far fa-eye" id="show1" onclick="myFunction1()" style="float: right; margin-top: -25px; cursor: pointer;display: none;" ></i></div>
					    <span id="messages" style="color:red;"> </span>
					  </div></div>			
						
					

                  </b>
                  <div class="buttons">
			    		<input type="submit" id="register" name="signup"  class="btn btn-primary mt-2" value="signup"  >
              </div> 
    		
				</div>
			</div>
		</div>

	</form>
	</div>

	<?php 


if(isset($_POST['signup']))
{   

                     
$NAME = $_REQUEST['NAME'];
$DOB = $_REQUEST['DOB'];
$GEN =  $_REQUEST['GEN'];
$ADDR=  $_REQUEST['ADDR'];
$MOBL = $_REQUEST['MOBL'];

$PASS_WORD= $_REQUEST['PASS_WORD'];
$PASS_WORD = hash("sha256", $PASS_WORD);
$sql="SELECT * from emp_info where (MOBL='$MOBL')";
 $res=mysqli_query($conn,$sql);
      if(mysqli_num_rows($res)) {
   
            	echo "<script> alert('Mobile number already exists')</script>";
        }
else{
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
$sql1="INSERT INTO emp_info (NAME,DOB,GEN,ADDR,MOBL,ADDR_PROOF,PASS_WORD) VALUES ('$NAME','$DOB','$GEN','$ADDR','$MOBL','$filename','$PASS_WORD')"; 

 if(mysqli_query($conn, $sql1)){
	echo "<script> alert('successfull registered,please login')</script>";
	
}
else {
            echo "Failed to upload file.";
        }
}

}
          

?>

<?php
if (isset($_POST['signup'])) { 
    // name of the uploaded file

$NAME = $_REQUEST['NAME'];
$DOB = $_REQUEST['DOB'];
$GEN =  $_REQUEST['GEN'];
$ADDR=  $_REQUEST['ADDR'];
$MOBL = $_REQUEST['MOBL'];

$PASS_WORD= $_REQUEST['PASS_WORD'];
$PASS_WORD = hash("sha256", $PASS_WORD);
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
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
       $sql1="INSERT INTO emp_info (NAME,DOB,GEN,ADDR,MOBL,ADDR_PROOF,PASS_WORD) VALUES ('$NAME','$DOB','$GEN','$ADDR','$MOBL','$filename','$PASS_WORD')";  {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
?>
<script type="text/javascript">
   var password = document.getElementById("PASS_WORD")
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

 <script>
       function myFunction(){
       	var x=document.getElementById("PASS_WORD");
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
        $('button[type="submit"]').prop("disabled", true);
        var a=0;        
        $('#ADDR_PROOF').bind('change', function() {
        if ($('button:submit').attr('disabled',false)){
                $('button:submit').attr('disabled',true);
        }
        var ext = $('#ADDR_PROOF').val().split('.').pop().toLowerCase();
        if ($.inArray(ext, ['gif','png','jpg','jpeg','text','rtf','doc','pdf']) == -1){
                $('#error1').slideDown("slow");
            a=0;
        }else{
                $('#error1').slideUp("slow");
                if (a==1){
                    $('button:submit').attr('disabled',false);
                    }
            }
        });
</script>

<?php
	include "footer1.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
