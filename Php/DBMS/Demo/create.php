<?php
    $mssv = isset($_POST['mssv']) ? $_POST['mssv'] : "";
    $hoten = isset($_POST['hoten']) ? $_POST['hoten'] : "";

    if (isset($_POST['submit'])) {
        $db = new PDO('sqlite:db/demo.db');
        $sql = "INSERT INTO ThanhVienNhom(MSSV,Hoten) VALUES ('$mssv','$hoten');";
        $db->query($sql);
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .container{
            padding-top:10px;
        }
    </style>    
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Thêm sinh viên</h2>
                </div>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Mã số sinh viên:</label>
                        <input type="text" name="mssv" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Họ và tên:</label>
                        <input type="text" name="hoten" class="form-control">
                    </div>
                    <input type="submit" name="submit" value="Nhập" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>