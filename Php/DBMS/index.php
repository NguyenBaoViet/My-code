<?php
require_once "config.php";
$sql = "SELECT * FROM sinhvien";
$result = $link->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .btn{
            margin-left: 10px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 20px;margin-bottom: 20px;">
                    <div class="card-body">
                        <h2 class="pull-left">Danh sách sinh viên<a href="create.php" class="btn btn-success pull-right">Thêm sinh viên</a></h2>
                    </div>
                </div>
                <?php
                if ($result->num_rows > 0) {
                        echo "<table class='table table-bordered table-striped'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>MSSV</th>";
                        echo "<th>Họ và tên</th>";
                        echo "<th>Năm sinh</th>";
                        echo "<th>Điểm môn 1</th>";
                        echo "<th>Điểm môn 2</th>";
                        echo "<th>Điểm môn 3</th>";
                        echo "<th>Email</th>";
                        echo "<th>Số điện thoại</th>";
                        echo "<th>Hành động</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['mssv'] . "</td>";
                            echo "<td>" . $row['ho_ten'] . "</td>";
                            echo "<td>" . $row['nam_sinh'] . "</td>";
                            echo "<td>" . $row['diem_mon_1'] . "</td>";
                            echo "<td>" . $row['diem_mon_2'] . "</td>";
                            echo "<td>" . $row['diem_mon_3'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['sdt'] . "</td>";
                            echo "<td>";
                            echo "<a href='update.php?id=" . $row['mssv'] . "' class='btn btn-info'>Update</a>";
                            echo "<a href='delete.php?id=" . $row['mssv'] . "' class='btn btn-danger'>Delete</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        // Free result set
                        $result->free();
                    } else {
                        echo "<p class='lead'><em>Không có dữ liệu</em></p>";
                    }
                $link->close();
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>