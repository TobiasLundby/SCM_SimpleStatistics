<?php
    $file = 'data.csv';
    $colour = $_GET['colour'];
    $gender = $_GET['gender'];
    $date=new DateTime(); //this returns the current date time
    $date->modify('+2 hours');
    $result = $date->format('Y-m/d-H:i:s');
    if ($colour === 'red') {
        $colour_num = '1';
    } elseif ($colour === 'green') {
        $colour_num = '2';
    } elseif ($colour === 'blue') {
        $colour_num = '3';
    } else {
        $colour_num = 'NaN';
    }
    if ($gender === 'male') {
        $gender_num = '1';
    } elseif ($gender === 'female') {
        $gender_num = '2';
    } else {
        $gender_num = 'NaN';
    }
    $data = $result.','.$colour.','.$gender.','.$colour_num.','.$gender_num.PHP_EOL;
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    header("Location: https://www.techgen.dk/SCM/index.php");
    die();
?>
