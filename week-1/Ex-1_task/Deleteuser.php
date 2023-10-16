<?php      
    include('connection.php');  
    $name = $_POST['user'];  
 
      $sql = "delete from registrations WHERE name='$name'"; 
        
      if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
           } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $con->error;
    }

$con->close();
        
?> 
    