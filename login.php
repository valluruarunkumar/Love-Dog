<html>
    <body>
        <?php
            session_start();
            $email=$_POST['email'];
            $pwd=$_POST['password'];
            $conn=mysqli_connect('127.0.0.1','root','','tindog');
            $sql="SELECT * FROM users WHERE email='$email' AND password='$pwd';";
            $res=mysqli_query($conn,$sql);
            $no_of_rows=mysqli_num_rows($res);
            if ($no_of_rows){
                
                header('Location:../petswatch.html');
                
            }
            else{
                // echp
                header('Location:../html/login1.html');
                
            }
        ?>
    </body>
</html>