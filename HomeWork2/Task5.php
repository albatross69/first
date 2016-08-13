<?php
#Задание5
    function is_palindrom($string)
    {
        $rev_string = strtolower(strrev($string));//переворачивем и приводим в нижний регистр

        if (str_replace(" ", "", $rev_string) == str_replace(" ", "", strtolower($string)))
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    if (is_palindrom("A roza upala na lapu Azora"))
    {
        function notice()
        {
            echo "Строка - палиндром";
        }
    }
    else
    {
        function notice()
        {
            echo "Строка - не палиндром";
        }
    }

    notice();
