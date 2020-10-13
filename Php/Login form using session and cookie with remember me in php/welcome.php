<?php 
    session_start();
    if (isset($_SESSION['email'])) {
        echo "Welcome ".$_SESSION['email']."<br>";
        echo '<a href="login.php">Logout</a>';
    } else {
        header('Location: login.php');
    }
?>