<?php
#Задание 8
    $str = 'Red Hot Chili Peppers';
    echo $str;
    echo "<br/>";

    $arr = explode(' ', $str);
    print_r($arr);
    echo "<br/>";

    $len = count($arr);
    $i = 0;

    while ($i != $len/2)
    {
        $temp = $arr[$len-$i-1];
        $arr[$len-$i-1] = $arr[$i];
        $arr[$i] = $temp;
        $i++;
    }

    $str2 = join('%', $arr);
    echo $str2;
