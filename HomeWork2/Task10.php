<?php
#Задание10
    touch('anothertext.txt');
    $handle = fopen('anothertext.txt', "w");
    fwrite($handle, "Hello again!");

    $file = fopen('anothertext.txt', "r");
    echo fgets($file);
    fclose($handle);
