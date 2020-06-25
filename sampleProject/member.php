<?php
    require "./dbconfig/memberdb.php"
?>

<!DOCTYPE html>
<html>
<head>
<h1>ADD MEMBER</h1>
</head>
    <body>
    <form class="loginForm" method="post">
        <input name="memberName" type = "text" placeholder="Name" class="memberName" required><br>
        <input name="wing" type = "text" placeholder="Wing" class="wing" required><br>                
        <input name="add_btn" type="submit" value="Add Member">
    </form>
        <?php
            if(isset($_POST['add_btn'])){
                $memberName = $_POST['memberName'];
                $wing = $_POST['wing'];
                $querycheck = "select * from memberInfo WHERE name='$memberName' AND wing='$wing'";
                $query_run = mysqli_query($connection,$querycheck);
                // echo "HERE";
                if(mysqli_num_rows($query_run)>0){
                    echo 'already added';
                    // header('location:member.php');
                }else{
                    $query = "insert into memberInfo values('$memberName','$wing')";
                    $query_run = mysqli_query($connection,$query);
                }                    

                // if(mysqli_num_rows($query_run)>0){
                //     echo 'EXIST';
                //     header('location:member.php');
                // }else{
                //     echo 'NOT EXIST';
                    
                // }
            }
        ?>
    </body>
</html>
