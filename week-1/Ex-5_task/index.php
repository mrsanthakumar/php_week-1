<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->
<?php 
include_once("connection.php");
?>
<title>Drop-down Selection Data Load with ajax, PHP & MySQL</title>
<script type="text/javascript" src="getdata.js"></script>
</head>
<body class="">
<div class="container" style="min-height:500px;">
    <div class=''>
</div>

    <h2>Drop-down Selection Data Load with ajax, PHP & MySQL</h2>       
    
    <div class="page-header">
        <h3>
            <select id="registrations" class="form-control" >
                <option value="" selected="selected">Select Student Name</option>
                <?php
                $sql = "SELECT reg_id, name, fname,mname,gender,dob,address,category,course,course_fees,email,mobile FROM registrations";
                $resultset = mysqli_query($conn, $sql);
                while( $rows = mysqli_fetch_assoc($resultset) ) { 
                ?>
                <option value="<?php echo $rows["reg_id"]; ?>"><?php echo $rows["name"]; ?></option>
                <?php } ?>
            </select>
        </h3>   
    </div>  
    <!-- <div class="hidden" id="errorMassage"></div>
    <table class="table table-striped hidden" id="recordListing">  -->
    <div>
    <table border=1>
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Mother Name</th>
            <th>Gender</th>
            <th>DoB</th>
            <th>Address</th>
            <th>Category</th>
            <th>course</th>
            <th>Coruse Amount</th>
            <th>Pay Status</th>
            <th>Email</th>
            <th>Mobile</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="reg_id"></td>
            <td id="name"></td>
            <td id="fname"></td>
            <td id="mname"></td>
            <td id="gender"></td>
            <td id="dob"></td>
            <td id="address"></td>
            <td id="category"></td>
            <td id="course"></td>
            <td id="course_fees"></td>
            <td id="pay_status"></td>
            <td id="email"></td>
            <td id="mobile"></td>
            
          </tr>
        </tbody>            
    </table>       
</div>
<div class="insert-post-ads1" style="margin-top:20px;">
</div>
</div>
</body></html>
