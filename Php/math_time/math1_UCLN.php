<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/math1.css">
</head>
<body>
    <?php 
        $faction = '';
        $flag = false;

        function UCLN($n1,$n2){
            for($i=1 ; $i<=$n1 ; $i++){
                if($n1 % $i == 0) {$UCLN1[] = $i;}
            }
            for($i=1 ; $i<=$n2 ; $i++){
                if($n2 % $i == 0) {$UCLN2[] = $i;}
            }

            $temp = array_intersect($UCLN1,$UCLN2);
            return $result = max($temp);
        }

        if (isset($_POST['faction'])) {
            $faction = $_POST['faction'];
            $flag = true;
            $arrFaction = explode("/",$faction);
            $ucln = UCLN($arrFaction[0],$arrFaction[1]);
            $ts = $arrFaction[0]/$ucln;
            $ms = $arrFaction[1]/$ucln;
            if ($ms === 1) {
                $result = $ts;
            } else {
                $result = $ts.'/'.$ms;
            }
        }
    ?>
    <div class="content">
        <h1>Faction reduction</h1>
        <form method="post" action="#">
            <div class="row">
                <input name = "faction" type = "text" value = "<?php echo $faction ?>">
            </div>
            <div class="row">
                <input type = "submit" name = "typesubmit" value = "Test">
            </div>
            <div class="row">
                <?php 
                    if ($flag) {
                        echo "<p>Result = $result</p>";
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>