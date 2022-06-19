<?php
session_start();
include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/admin_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
</head>
<body>



<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">


                    <div class="heading" style="text-align: center;">
          <h4>employee info</h4>
        
            <div class="cart" id="empl_info">  
                <div class="table-responsive" >
                 <input type="button" onclick="printDiv('empl_info')" value="Print" style="float :right"><br/><br/>
                <table id="myTable" class="display table" width="100%" > 
                <thead role="rowgroup">
                  <tr role="row">
                    <th role="columnheader" class="view-cart">ID</th>
                    <th role="columnheader" class="view-cart">Name</th>
                    <th role="columnheader" class="view-cart">DOB</th>
                    <th role="columnheader" class="view-cart">Gender</th>
                     <th role="columnheader" class="view-cart">Address</th>
                    <th role="columnheader" class="view-cart">Mobile</th>
                    <th role="columnheader" class="view-cart">Address proof</th>

                  </tr>
                </thead>
                <tbody role="rowgroup" class="view-data">
                  <tr role="row">
                     
                           <?php
        $query = "SELECT * FROM emp_info ";
        $query_run = mysqli_query($conn, $query);    
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {    
              
                $newDate=strtotime($row['DOB']);
                $new_date = date("d/m/Y", $newDate);
                
            ?>    
                
                    <td role="cell"><?php echo $row['ID']; ?></td>
                    <td role="cell"><?php echo $row['NAME']; ?></td>
                     <td role="cell"><?php echo $new_date; ?></td>
                      <td role="cell"><?php echo $row['GEN'];?></td>
                    <td role="cell"><?php echo $row['ADDR']; ?></td>
                    <td role="cell"><?php echo $row['MOBL']; ?></td>
                     <td role="cell"><a href="uploads/<?php echo $row['ADDR_PROOF'] ?>" target="_blank">view file</a></td>
                    </tr>
                  <?php
               }
            }
            ?>

                </tbody>      
              </table>
          </div>
      </div>
</div>
 
    <script type="text/javascript">

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}  


    </script>

       <script type="text/javascript" 
src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" 
src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  
<script>
$('#myTable').dataTable();

</script>



<script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
</div>
</div>
<?php
include("footer1.php");
 ?>
</body>
</html>