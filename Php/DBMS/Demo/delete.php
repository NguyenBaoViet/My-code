<?php
    $db = new PDO('sqlite:db/demo.db');
    $id = $_GET['id'];
    $sql = "DELETE FROM ThanhVienNhom WHERE MSSV = '$id';";
    $db->query($sql);
    header("location:index.php");
?>