<?php

    include "Controller/Register.php";
    use Controller\Register;

    
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];

        if(!empty($username) && !empty($password) ?? !empty($confirm)){
            if($password != $confirm){
                echo "password not match";
            }
            else{
                $insert = Register::store($username, password_hash($password, PASSWORD_DEFAULT));
                if($insert){
                    echo "record inserted successful";
                }
                else{
                    echo "database error";
                }   
            }
        }
        else{
            echo "all field must required";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <input type="text" name="username">
        </div>
        <div>
            <input type="password" name="confirm">
        </div>
        <div>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" name="submit" value="Register">
        </div>
    </form>
</body>
</html>