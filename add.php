<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <title>AdminPanel</title>
</head>
<body>
    <div class="container">
    <div class="navbar">
    <img src="Avicii_-_1.png" class="logo">
    <nav>
    <ul>
       
     <li><a href="index.php"><i class="fas fa-sign-out-alt"></i></i></a></li>        
    </ul>
    </nav>
    
</div> 
<div class="header">
<center><img src="admin.jpg" alt="adminlogo" class="admin-logo"></center><br>
<p>ADMIN PANEL</p>
</div>
<div class="sidebar">
<ul>
<li><a href="add.php">ADD DATA</a></li>
<li><a href="Delete.php">DELETE DATA</a></li>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "home";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["addskill"])){
    $skillid = $_POST["skiid"];
    $skilltitle = $_POST["skititle"];
    $skillstatus = $_POST["skistatus"];
    
    $sql = "INSERT INTO skills (id, title, status)
VALUES ('$skillid', '$skilltitle', '$skillstatus')";

    if ($conn->query($sql) === TRUE) {
    echo "<script> alert('skill added successfully') </script>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>

</div>
<div class="data">

<?php 

$sql = "select * from skills";

    $myquery = $conn->query($sql);

    echo "
    <div style='overflow-x:auto;'>
    <table border='1'>
    <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Status</th>
    <th>Action</th>
    
    </tr>";



    while($row = $myquery->fetch_assoc()){

        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";

        echo "<td>" . $row['title'] . "</td>";

        echo "<td>" . $row['status'] . "</td>";

        if( $row['deleted'] == 0 ){
            echo "
            <td>
                <a name='deleted' href='mydelete.php?deleted=$row[id]' style='color: red;'>Delete</a> 
            </td>";
        }
        else{
            echo "
            <td>
                <a name='deleted' href='mydelete.php?deleted=$row[id]' style='color: blue;'>Undo Delete</a> 
            </td>
            ";
        }

        echo "</tr>";
     }
        echo "</table>";
        echo "<br>";
?>

<center><h3>ADD DATA HERE</h3></center><br>
<div class="form1">
    <form id="admin-form" method="POST" action="add.php">
    <input name="skiid" type="text" class="form-control" placeholder="Enter Skill id" required><br>
    <input name="skititle" type="text" class="form-control" placeholder="Enter skill title" required><br>
    <input name="skistatus" type="text" class="form-control" placeholder="Enter skill status" required><br>
    <input type="submit" name="addskill" class="admin-control submit" value="ADD">

    </form><br>
</div>

</div>
    </div>
</body>
</html>