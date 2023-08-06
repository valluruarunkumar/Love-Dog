<?php
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $pwd=$_POST['password'];
    $conn=mysqli_connect('127.0.0.1','root','','tindog');
    $sql="INSERT INTO users VALUES('$firstname','$lastname','$email','$pwd');";
    if (mysqli_query($conn,$sql)){
        
            header('Location:../login1.html');
       
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
?>
