<?php
    require_once('config.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM `sinhvien` WHERE `mssv` = $id;";
    mysqli_query($link,$sql);
    header("location:index.php");
?>