<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <title>Contacts</title>
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
<div class="contact-title">
    <h1>CONTACT US</h1>
    <br>
    <br>
</div> 
<div class="contact-form">
    <form id="contact-form" method="post" action="connect.php">
    <input name="firstname" type="text" class="form-control" placeholder="Your First Name" required><br>
    <input name="lastname" type="text" class="form-control" placeholder="Your Second Name" required><br>
    <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>
    <textarea name="message" class="form-control" placeholder="Message"rows="4"></textarea><br>
    <input type="submit" class="form-control submit" value="SEND MESSAGE">
    </form><br>

  <div class="contacts">
    <nav>
    <ul>
        <li><a href="https://Github.com/InTheYearOf39"><i class="fab fa-github"></i></a></li>
        <li><a href="https://garynkuraija@gmail.com"><i class="fas fa-envelope"></i></a></li>
        <li><a href=""><i class="fas fa-phone-alt"></i></a></li>
        <p>Github.com/InTheYearOf39 | garynkuraija@gmail.com | 0786202380</p>
    </ul>
    </nav>
    
</div>
</div>


</div>
</body>
</html>