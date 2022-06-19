
 <?php
include 'config.php'; 
 session_start();
$id=$_SESSION['ID'];
$sql = "SELECT * FROM emp_info WHERE ID= '$id'"; // Fetch data from the table customers using id
$result=mysqli_query($conn,$sql);
$singleRow = mysqli_fetch_assoc($result);
?>