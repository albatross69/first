<?php
#Задание9
    function print_file($filename)
    {
        if (!is_string($filename))
        {
            echo 'Неверное имя файла!!!';
            exit;
        }

        $file = fopen($filename, "r");
        echo fgets($file);
        fclose($file);
    }

    print_file("test.txt");
