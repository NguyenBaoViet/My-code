<?php
    $filename = 'option/options.txt';
    $data = file($filename);
    array_shift($data);
    foreach ($data as $key => $value) {
        $tmp_arr = explode('|', $value);
        $questionID = $tmp_arr[0];
        $optionID = $tmp_arr[1];
        $answer = $tmp_arr[2];
        $point = $tmp_arr[3];
        $arr_Option[$questionID][$optionID]['option'] = $answer;
        $arr_Option[$questionID][$optionID]['point'] = $point;
    }