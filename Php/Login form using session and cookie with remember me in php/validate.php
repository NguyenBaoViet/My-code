<?php
    session_start();

    $myemail = "1710302@gmail.com";
    $mypass  = "123456";

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass  = $_POST['password']; 

        if ($email == $myemail && $pass == $mypass) {
            if (isset($_POST['remember'])) {
                setcookie('email',$email,time()+60*60*7);
                setcookie('password',$pass,time()+60*60*7);
                setcookie('remember',1,time()+60*60*7);
            } else {
                setcookie('remember',0,time()+60*60*7);
            }

            $_SESSION['email'] = $email;
            header('location: welcome.php');
        } else { 
            echo "Email or password is invailid.<br>
            Click here to <a href= 'login.php'>to try again</a>";
        }
    } else {
        header("location: login.php");
    }

?>