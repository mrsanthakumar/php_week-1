<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Page</title>
   <link rel="stylesheet" href="css/style.css">
   <style>
       body {
           font-family: Arial, sans-serif;
           background-color: #f5f5f5;
           margin: 0;
           padding: 0;
       }
       .header {
           background-color: #3498db;
           color: white;
           padding: 20px;
           display: flex;
           justify-content: space-between;
           align-items: center;
           position: fixed;
           top: 0;
           width: 100%;
       }
       .navbar a {
           color: white;
           text-decoration: none;
           padding: 10px 20px;
           border-radius: 5px;
           transition: background-color 0.3s;
       }
       .navbar a:hover {
           background-color: #2980b9;
       }
       .content {
           margin-top: 80px; /
           padding: 20px;
       }
       .menu {
    display: flex;
    flex-direction: column;
    padding-left: 20px;
    margin-top: 80px;
    height: calc(100vh - 80px);
    box-sizing: border-box; 
}

.menu a {
    margin-bottom: 10px; 
    padding: 10px 20px;
    text-decoration: none;
    color: black;
    border-radius: 5px;
}

   </style>
</head>
<body>
   <div class="header">
      <h1>Welcome, <?php echo $_SESSION['admin_name'] ?></h1>
      <div class="navbar">
          <a href="logout.php">Logout</a>
      </div>
   </div>
   <div class="content">
      <div class="menu">
         <a href="/week-1/Ex-4_Task/form.php">Add User</a>
         <a href="/week-1/Ex-1_Task/updateuser.html">Update User</a>
         <a href="/week-1/Ex-1_Task/deleteuser.html">Delete User</a>
         <a href="/week-1/Ex-5_Task/index.php">Search User</a>
         <a href="/week-1/Ex-1_Task/showalluser.php">Show All Users</a>
      </div>
   </div>
</body>
</html>
