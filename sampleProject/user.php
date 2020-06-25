<?php
    require "./dbconfig/userdb.php";
    $query = "insert into info values('exampleID','password')";  
    $query_run = mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html>
    <head>
    <h1>LOGIN</h1>
    <link rel="stylesheet" href="./style/style.css">
    </head>
    <body>
        <div class="login">
            <form class="loginForm" method="post">
                <input name="username" type = "text" placeholder="Username" class="userID" required><br>
                <input name="pass" type = "password" placeholder="password" class="password" required><br>                
                <input name="login_btn" type="submit" value="login">
            </form>
        </div>
        <?php
        
            if(isset($_POST['login_btn'])){
                $username = $_POST['username'];
                $pass = $_POST['pass'];
                $query = "select * from info WHERE loginID='$username' AND password='$pass'";
                $query_run = mysqli_query($connection,$query);
                if(mysqli_num_rows($query_run)>0){
                    echo 'EXIST';
                    header('location:member.php');
                }else{
                    echo 'NOT EXIST';
                    
                }
            }
        ?>
    </body>
</html>