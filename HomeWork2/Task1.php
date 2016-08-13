<?php
#Задание1
    function output($arr, $glue = false)
    {
        if($glue == false)
        {
            foreach ($arr as $value)
            {
                echo "<p>$value</p>";
            }
        }
        else
        {
            echo join(' ', $arr);
        }
    }

    $str = Array('ars', 'awr', 'wrsar');

    output($str, true);
