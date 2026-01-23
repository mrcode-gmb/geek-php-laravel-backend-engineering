<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $errors = [];
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
        $password = $_POST['password'];
        $actualName = htmlspecialchars(string: $name);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Invalid email format";
        }if(empty($name) || empty($email) || empty($pnumber) || empty($password)){
            $errors[] = "All input field must be required!";
        }if(strlen($pnumber) < 11 || strlen($pnumber) > 11){
            $errors[] = "Phone number must be at least 11 digits";
        }
        

        if(empty($errors)){
            echo "Name: ". trim($actualName) ."<br/>";
            echo "Email: ". $email ."<br/>";
            echo "Phone number: ". $pnumber ."<br/>";
            echo "Password: ". $password ."<br/>";
        }
        else{
            foreach($errors as $error){
                echo  "<p style='color:red; background-color:yellow'>$error</p>";
            }
        }


    }
    else{
        echo "Invalid\n http method format";
    }

?>