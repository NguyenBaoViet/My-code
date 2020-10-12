<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckDate</title>
    <link rel="stylesheet" href="css/math2.css">
</head>
<body>
    <?php
        $arrDays = range(1,31);
        $arrMonths = range(1,12);
        $arrYears = range(1970,2020);

        function createSelectBox($arrData,$name,$keySelected){
            $strDate = '';
            if(!empty($arrData)){
                $strDate .= '<select name ="'.$name.'">';
                foreach($arrData as $key => $value){
                    if($value == $keySelected){
                        $strDate .= '<option value ="'.$value.'" selected = true>'.$value.'</option>';
                    }else{
                        $strDate .= '<option value ="'.$value.'">'.$value.'</option>';
                    }
                }
                $strDate .= '</select>';
            }
            return $strDate;
        }

        $day = (isset($_POST['day'])) ? $_POST['day'] : 0;
        $month = (isset($_POST['month'])) ? $_POST['month'] : 0;
        $year = (isset($_POST['year'])) ? $_POST['year'] : 0;

        $strDays = createSelectBox($arrDays,'day',$day);
        $strMonths = createSelectBox($arrMonths, 'month',$month);
        $strYears = createSelectBox($arrYears,'year',$year);
    ?>
    <div class="content">
        <h1>Date Testing</h1>
        <form action="#" method = "POST">
            <div class = "row">
                <p>Day</p><?php echo $strDays;?>
            </div>
            <div class = "row">
                <p>Month</p><?php echo $strMonths;?>
            </div>
            <div class = "row">
                <p>Year</p><?php echo $strYears;?>
            </div>
            <div class = "row">
                <input type="submit" value="Test" name="typesubmit"/>
            </div>
            <div class="result">
                <span>User has been entered: </span>
                <?php
                    echo ' '.$day.'/'.$month.'/'.$year.'<br>';
                    if(checkdate($month,$day,$year)){
                        echo '<b>Date valid</b>';
                    }else{
                        echo '<b>Date invalid</b>';
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>