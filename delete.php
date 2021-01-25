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
<li><a href="update.php">UPDATE DATA</a></li>


</div>
<div class="data">
<center><h3>DELETE DATA HERE</h3></center><br>
<div class="form1">
    <form id="admin-form" method="post" action="">
    <input name="firstname" type="text" class="form-control" placeholder="Enter Names" required><br>
    <input name="lastname" type="text" class="form-control" placeholder="Enter Bio" required><br>
    <input type="submit" class="admin-control submit" value="DELETE">
    </form><br>
</div>

</div>
    </div>
</body>
</html>