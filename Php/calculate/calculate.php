<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php  
        $n1 = "";
        $n2 = "";
        $calc ="";
        $flag = false;
        if(isset($_POST['typeSubmit']) && $_POST['typeSubmit'] != 'Xóa'){
            if(isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['calculate'])){
                $n1 = $_POST['number1'];
                $n2 = $_POST['number2'];
                $calc = $_POST['calculate'];
                $flag = true;

                if(is_numeric($n1) && is_numeric($n2)){
                    switch ($calc){
                        case '+':
                            $result = $n1 + $n2;
                        break;
                        case '-':
                            $result = $n1 - $n2;
                        break;
                        case '*':
                        case 'x':
                            $result = $n1 * $n2;
                        break;
                        case '/':
                        case ':':
                            $result = $n1 / $n2;
                        break;
                        default:
                            $result = $n1 + $n2;
                            $calc = '+';
                        break;
                    }   
                }else{
                    $flag = false;
                }
            }else{
                $flag = false;
            }  
        }    
    ?>
    <div class = "container">   
        <h1>Mô phỏng máy tính điện tử</h1>
        <form action="#" method="POST" name="main-form">
            <div class = "row">
                <span>Số thứ nhất</span>
                <input type="text" name="number1" value="<?php echo $n1;?>"/>
            </div>
            <div class = "row">
                <span>Phép toán</span>
                <input type="text" name="calculate" value = "<?php echo $calc;?>"/>
            </div>
            <div class = "row">
                <span>Số thứ hai</span>
                <input type="text" name="number2" value="<?php echo $n2;?>"/>
            </div>
            <div class = "row">
                <input type="submit" value="Xem kết quả" name = "typeSubmit"/>
                <input type="submit" value="Xóa" name = "typeSubmit"/>
            </div>
            <div class = "row">
                <?php 
                    if($flag){
                        echo "<p>Kết quả là: $n1 $calc $n2 = $result</p>";
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>