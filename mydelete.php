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


 if(isset($_GET['deleted']))
 {
    $deleted=$_GET['deleted'];

    $mysq = "select deleted from skills where id = $deleted";
    $myquery = $conn->query($mysq);
    while($row = $myquery->fetch_assoc()){
    
    if($row["deleted"] == 0){
        $sql = "UPDATE skills SET deleted = 1 WHERE id=$deleted";
        
        if($conn->query($sql)){
      
            echo "<script type='text/javascript'>alert('Skill deleted successfully');window. location. href='add.php'; </script>";

        }
        else{
        
            echo "<script type='text/javascript'>alert('There was an error ')</script>";
        }
    }
    else{
    
        $sql = "UPDATE skills SET deleted = 0 WHERE id=$deleted";

        if($conn->query($sql)){
            
            echo "<script type='text/javascript'>alert('Skill restored');window. location. href='projects.php'; </script>";
            
        }
        else{
        
            echo "<script type='text/javascript'>alert('There was an error ')</script>";
        }
        
    }
}
    
} 

?>