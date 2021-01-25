<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$message=$_POST['message'];

// database connection
$conn = new mysqli('localhost','root','','Contacts');
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}else{
        $stmt = $conn->prepare("insert into Contacts(FirstName,LastName,Email,Message) values(?,?,?,?)");
        $stmt->bind_param("ssss",$firstname,$lastname,$email,$message);
        $stmt->execute();
        echo "Registration successfull...";
        $stmt->close();
        $conn->close();
    }

?>