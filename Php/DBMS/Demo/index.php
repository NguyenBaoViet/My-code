<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    $db = new PDO('sqlite:db/demo.db');
                    $sql = "SELECT * FROM ThanhVienNhom;";
                    $result = $db->query($sql);
                        if ($result) {
                            echo "<table class='table table-bordered table-striped'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>MSSV</th>";
                            echo "<th>Họ và tên</th>";
                            echo "<th>Hành động</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            foreach ($result as $row) {
                                echo "<tr>";
                                echo "<td>" .$row[0]. "</td>";
                                echo "<td>" .$row[1]. "</td>";
                                echo "<td>";
                                echo "<a href='update.php?id="  .$row['MSSV']. "' class='btn btn-info'>Update</a>";
                                echo "<a href='delete.php?id="  .$row['MSSV']. "' class='btn btn-danger'>Delete</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            $db = null;
                        } else {
                            echo "<p class='lead'><em>Không có dữ liệu</em></p>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>