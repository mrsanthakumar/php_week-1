<?php
include_once("connection.php");
if($_REQUEST['empid'])
 {
    $sql = "SELECT reg_id, name, fname,mname,gender,dob,address,category,course,course_fees,pay_status,email,mobile FROM registrations WHERE reg_id='".$_REQUEST['empid']."'";
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));  
    $data = array();
    while( $rows = mysqli_fetch_assoc($resultset) ) 
    {
        $data = $rows;
    }
    echo json_encode($data);
} 
else {
    echo 0; 
     }
?>

