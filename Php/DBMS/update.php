<?php
    require_once('config.php');
    $id = $_GET['id'];
    $mssv = isset($_POST['mssv']) ? $_POST['mssv'] : "";
    $hoten = isset($_POST['hoten']) ? $_POST['hoten'] : "";
    $namsinh = isset($_POST['namsinh']) ? $_POST['namsinh'] : "";
    $diem1 = isset($_POST['diem1']) ? $_POST['diem1'] : "";
    $diem2 = isset($_POST['diem2']) ? $_POST['diem2'] : "";
    $diem3 = isset($_POST['diem3']) ? $_POST['diem3'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : "";
    
    
    if (isset($_POST['submit'])){
        $sql = "UPDATE `sinhvien` SET `ho_ten` = '$hoten', `nam_sinh` = '$namsinh', `diem_mon_1` = $diem1, `diem_mon_2` = $diem2, `diem_mon_3` = $diem3, `email` = '$email', `sdt` = $sdt WHERE `mssv` = $id;";
        mysqli_query($link,$sql);
        header("location:index.php");
    }

    $sql1 = "SELECT ho_ten,nam_sinh,diem_mon_1,diem_mon_2,diem_mon_3,email,sdt 
        FROM sinhvien 
        WHERE mssv = $id;";
    $result = $link->query($sql1);
    $row = $result->fetch_array();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cập nhật sinh viên</title>
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
                    <h2>Cập nhật thông tin sinh viên</h2>
                </div>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Mã số sinh viên:</label>
                        <input type="text" name="mssv" class="form-control" value="<?php echo $id ?>">
                    </div>
                    <div class="form-group">
                        <label>Họ và tên:</label>
                        <input type="text" name="hoten" class="form-control" value="<?php echo $row['ho_ten'];?>">
                    </div>
                    <div class="form-group">
                        <label>Năm sinh:</label>
                        <input type="text" name="namsinh" id="datetime" class="form-control" value="<?php echo $row['nam_sinh'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Điểm môn 1:</label>
                        <input type="text" name="diem1" class="form-control" value="<?php echo $row['diem_mon_1']?>">
                    </div>
                    <div class="form-group">
                        <label>Điểm môn 2:</label>
                        <input type="text" name="diem2" class="form-control" value="<?php echo $row['diem_mon_2']?>">
                    </div>
                    <div class="form-group">
                        <label>Điểm môn 3:</label>
                        <input type="text" name="diem3" class="form-control" value="<?php echo $row['diem_mon_3']?>">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $row['email']?>">
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại:</label>
                        <input type="text" name="sdt" class="form-control" value="<?php echo $row['sdt']?>">
                    </div>
                    <input type="submit" name="submit" value="Nhập" class="btn btn-primary" >

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>