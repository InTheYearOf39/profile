<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <title>Projects</title>
</head>
<body>
    <div class="container">
    <div class="navbar">
    <img src="Avicii_-_1.png" class="logo">
    <nav>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="projects.php">PROJECTS</a></li>
        <li><a href="contacts.php">CONTACTS</a></li>
     <li><a href="admin.php"><i class="fas fa-users-cog"></i></a></li>        
    </ul>
    </nav>
    
</div> 
<div class="projects">
<center><h1>PROJECTS</h1></center>
<a href="https://github.com/InTheYearOf39/Web-programming-">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="web2.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Web Development</h1> <br>
      <p>Projects for semester One</p><br> 
      <ul> <li><a href=""><i class="fab fa-github"></i></a></li></ul>
    </div>
  </div>
</div>
</a>
<a href="https://github.com/InTheYearOf39/ObjectOrientedProgramming">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="object.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Object Oriented Programming</h1> <br>
      <p>Projects for semester One</p> <br>
      <ul> <li><a href=""><i class="fab fa-github"></i></a></li></ul>
    </div>
  </div>
</div>
</a>
<a href="https://github.com/InTheYearOf39/Dynamic-Web-Profile-Page">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="stack.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Stack Development</h1> <br>
      <p>Full Stack Development</p> <br>
     <ul> <li><a href=""><i class="fab fa-github"></i></a></li></ul>
    </div>
  </div>
</div>
</a>
<br>
</div>

<center><h1>SKILLS</h1></center>

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
    $sql = "select * from skills where deleted = 0";

    $myquery = $conn->query($sql);

    echo "
    <div style='overflow-x:auto;'>
    <table border='1' style='color: grey tex-align:center;'>
    <tr>
    <th style='color:#fff;'>Id</th>
    <th style='color:#fff;'>Title</th>
    <th style='color:#fff;'>Status</th>
    
    </tr>";



    while($row = $myquery->fetch_assoc()){

        echo "<tr style='color:#fff;'>";

        echo "<td style='color:#fff;'>" . $row['id'] . "</td>";

        echo "<td style='color:#fff;'>" . $row['title'] . "</td>";

        echo "<td style='color:#fff;'>" . $row['status'] . "</td>";

        echo "</tr>";
     }
        echo "</table>";
?>

    </div>
</body>
</html>