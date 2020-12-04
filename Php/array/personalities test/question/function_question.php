<?php
    $filename = 'question/question.txt';
    $data = file($filename) or die('Cannot read file');
    $arr_Question = array();
    array_shift($data);
    foreach($data as $key => $value) {
        $tmp_arr = explode('|',$value);
        $id_question = $tmp_arr[0];
        $question = $tmp_arr[1];
        $arr_Question[$id_question] = $question;
    }