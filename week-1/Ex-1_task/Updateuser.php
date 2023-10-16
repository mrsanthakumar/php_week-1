<?php      
    include('connection.php');  
    $name = $_POST['name'];  
    $course = $_POST['course'];
    
                
        $sql = "UPDATE registrations SET course='$course' WHERE name='$name'"; 
        
      if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
           } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $con->error;
    }

$con->close();
        
?> 
