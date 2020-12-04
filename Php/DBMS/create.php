<?php
    require_once('config.php');
    $mssv = isset($_POST['mssv']) ? $_POST['mssv'] : "";
    $hoten = isset($_POST['hoten']) ? $_POST['hoten'] : "";
    $namsinh = isset($_POST['namsinh']) ? $_POST['namsinh'] : "";
    $diem1 = isset($_POST['diem1']) ? $_POST['diem1'] : "";
    $diem2 = isset($_POST['diem2']) ? $_POST['diem2'] : "";
    $diem3 = isset($_POST['diem3']) ? $_POST['diem3'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : "";
    
    if (!empty($mssv) && !empty($hoten) && !empty($namsinh) && !empty($diem1)) {
        $sql = "INSERT INTO `sinhvien` (`MSSV`, `ho_ten`, `nam_sinh`, `diem_mon_1`, `diem_mon_2`, `diem_mon_3`, `email`, `sdt`) VALUES ('$mssv', '$hoten', '$namsinh', '$diem1', '$diem2', '$diem3', '$email', '$sdt');";
        mysqli_query($link,$sql);
        header("location:index.php");
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
                    <div class="form-group">
                        <label>Năm sinh:</label>
                        <input type="text" name="namsinh" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Điểm môn 1:</label>
                        <input type="text" name="diem1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Điểm môn 2:</label>
                        <input type="text" name="diem2" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Điểm môn 3:</label>
                        <input type="text" name="diem3" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại:</label>
                        <input type="text" name="sdt" class="form-control">
                    </div>
                    <input type="submit" name="submit" value="Nhập" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>