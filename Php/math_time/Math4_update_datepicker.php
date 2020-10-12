<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Datepicker</title>
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/math4.css">
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
        dateFormat: "dd/mm/yy",
        defaultDate: "-1m",
        changeYear: true,
    });
  } ); 
  </script>
</head>
<body>
    <div class="content">
        <h1>Update Datepicker</h1>

        <?php
            //Exercise 1:
            $date = (isset( $_POST['datepicker'])) ? $_POST['datepicker'] : '';           
        ?>

        <form action="#" method="post" name = "form1" id = "form1">
            <div class="row">
                <span>Date</span> 
                <input readonly = "readonly" type="text" id="datepicker" name = "datepicker" value = "<?php echo $date; ?>">
            </div>
            <div class="row">
                <input type = "submit" value = "Submit">
            </div>
            <div class="result">
                <?php 
                    echo "1. Format datetime: <br>";
                    echo "Input: ".$date."<br>";
                    $date = date_parse_from_format("d/m/Y",$date);
                    $timeStampe = mktime(0,0,0,$date['month'],$date['day'],$date['year']);
                    echo "Output: ".date("d-m-Y",$timeStampe)."<br>";

//====================================================================================================================
//====================================================================================================================
                    //Exercise 2:
                    echo "<br>";
                    $arrayEn = array('Mon','Tue','Wed','Thu','Fri','Sat','Sun');
                    $arrayVi = array('Thứ 2','Thứ 3','Thứ 4','Thứ 5','Thứ 6','Thứ 7','Chủ nhật');
                    $result1 = date('h:i A D, d/m/Y',time());
                    $result1 = str_replace(',',', ngày',$result1);
                    $result1 = str_replace($arrayEn,$arrayVi,$result1);
                    echo "2. Today: ". $result1."<br>";

//====================================================================================================================
//====================================================================================================================
                    //Exercise 3:
                    echo "<br>3. Checking Leap Year:";
                    $n = (isset( $_POST['leap-year'])) ? $_POST['leap-year'] : '';
                    $arr_leap_year_err = array();
                    $flag1 = false;

                    if (!empty($_POST['leap-year-submit'])) {
                        //take data
                        $n = (isset( $_POST['leap-year'])) ? $_POST['leap-year'] : '';

                        //validation
                        if (empty($n)) {
                            $arr_leap_year_err['empty'] = 'Please enter the year!';
                        } else if (!is_numeric($n)) {
                            $arr_leap_year_err['not-number'] = 'Invalid year';
                        }

                        if (!$arr_leap_year_err) {
                            $flag1 = true;
                        }
                    }
                   
                    function check_leap_year($y) {
                        //leap year : n % 4 == 0 || (n % 400 == 0 && n % 100 != 0)
                        //n % 400 == 0 || (n % 4 == 0 && n % 100 != 0)
                        if (($y % 400 == 0) || ($y % 4 == 0 && $y % 100 != 0)) {
                            return true;
                        }
                        //$flag = checkdate(2,29,$year);
                        return false;
                    }
                ?>
            </div>
        </form>
        <form action="#" method ="POST" name = "form2" id = "form2">
            <div class="row">
                <input type = "text" name = "leap-year" value = "<?php echo $n ?>">
                <?php echo isset($arr_leap_year_err['empty']) ? $arr_leap_year_err['empty'] : ''; ?>
                <?php echo isset($arr_leap_year_err['not-number']) ? $arr_leap_year_err['not-number'] : ''; ?>
            </div>
            <div class="row">
                <input type = "submit" name = "leap-year-submit" value = "Submit">
            </div>
            <div class="result">
                <?php                    
                    if ($flag1 && !empty($_POST['leap-year-submit'])) {
                        if (check_leap_year($n)) {
                            echo "Leap Year <br>";
                        } else {
                            echo "Not a leap year <br>";
                        } 
                    }  
                ?>               
                <?php
//====================================================================================================================
//====================================================================================================================
                    echo "<br> 4. Number of days: <br>" ;
                    $month = (isset($_POST['month'])) ? $_POST['month'] : '';
                    $year = (isset($_POST['year'])) ? $_POST['year'] : '';
                    $arr_totalDay_err = array();
                    $flag2 = false;

                    if (!empty($_POST['total-days-submit'])) {
                        //take data
                        $month = (isset($_POST['month'])) ? $_POST['month'] : '';
                        $year = (isset($_POST['year'])) ? $_POST['year'] : '';

                        //validation 
                        if (empty($month)) {
                            $arr_totalDay_err['month'] = 'Please enter a month!';
                        } else if (!is_numeric($month)) {
                            $arr_totalDay_err['month'] = 'Invalid month!';
                        } else if ($month < 0 || $month > 12) {
                            $arr_totalDay_err['month'] = 'Invalid month!';
                        }

                        if (empty($year)) {
                            $arr_totalDay_err['year'] = 'Please enter a year!';
                        } else if (!is_numeric($year)) {
                            $arr_totalDay_err['year'] = 'Invalid year!';

                        }

                        if (!$arr_totalDay_err) {
                            $flag2 = true;
                        } 
                    }              

                    if ($flag2) {
                        $timeStampe = mktime(0,0,0,$month,1,$year);
                        $result2 = date('t',$timeStampe);
                    }                                
                ?>
            </div>
        </form>
        <form action="#" method = "POST" name = "form3" id = "form3">
            <div class="row">
                <span>Month</span>
                <input type = "text" name = "month" value = "<?php echo $month ?>">
                <?php echo (isset($arr_totalDay_err['month'])) ? $arr_totalDay_err['month']:'';?>
            </div>
            <div class="row">
                <span>Year</span>
                <input type = "text" name = "year" value = "<?php echo $year ?>">
                <?php echo (isset($arr_totalDay_err['year'])) ? $arr_totalDay_err['year'] : ''; ?>
            </div>
            <div class="row">
                <input type = "submit" name = "total-days-submit" value = "Submit">
            </div>
            <div class="result">
                <?php
                    if ($flag2 && !empty($_POST['total-days-submit'])) {
                        echo "Total days in $month/$year: ".$result2;
                    }
                ?>
                <?php
//====================================================================================================================
//====================================================================================================================
                    echo "<br> 5. Time status: <br>";
                    if (!empty($_POST['time-status-submit'])) {
                        $timePost = date('h:i:s d-m-Y', time());
                        echo 'You clicked  the button at '. $timePost ;
                    }

                    if (!empty($_POST['update-status'])) {
                        $timeReply = date('h:i:s d-m-Y', time());
                        echo $timeReply;
                        echo $timePost;
                    }
                ?>
            </div>
        </form>               
        <form action="#" method="POST" name = "form3" id = "form3">
            <div class="row">
                <input type = "submit" name = "time-status-submit" value = "Submit">
            </div>
            <div class="row">
                <input type = "submit" name = "update-status" value = "Update satus">
            </div>
        </form>
    </div>
</body>
</html>
