<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border: 2px solid black;
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black; /* Add border to each cell */
            padding: 5px; /* Adjusted padding for a neat look */
            text-align: center;
        }
        th {
            background-color: #f2f2f2; /* Light gray background for header */
        }
        td img {
            max-width: 100px;
            max-height: 100px;
            display: block;
            margin: 0 auto; /* Center the images */
        }
    </style>
</head>
<body>

<?php
$sql = "SELECT * FROM registrations";
$result = mysqli_query($con, $sql);

echo "<table>";
echo "<tr>
        <th>Register Number</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Mother Name</th>
        <th>Gender</th>
        <th>Date-of-Birth</th>
        <th>Address</th>
        <th>Category</th>
        <th>Course</th>
        <th>Course Fee</th>
        <th>Image</th>
        <th>Sign</th>
        <th>Pay Status</th>
        <th>Email</th>
        <th>Mobile</th>
      </tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["reg_id"] . "</td>
              <td>" . $row["name"] . "</td>
              <td>" . $row["fname"] . "</td>
              <td>" . $row["mname"] . "</td>
              <td>" . $row["gender"] . "</td>
              <td>" . $row["dob"] . "</td>
              <td>" . $row["address"] . "</td>
              <td>" . $row["category"] . "</td>
              <td>" . $row["course"] . "</td>
              <td>" . $row["course_fees"] . "</td>
              <td><img src='http://localhost/week-1/Ex-4_Task/uploads/" . $row["image"] . "' alt='Image'></td>
              <td><img src='http://localhost/week-1/Ex-4_Task/uploads/" . $row["sign"] . "' alt='Image'></td>
              <td>" . $row["pay_status"] . "</td>
              <td>" . $row["email"] . "</td>
              <td>" . $row["mobile"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='15'>0 results</td></tr>";
}

echo "</table>";
$con->close();
?>

</body>
</html>
