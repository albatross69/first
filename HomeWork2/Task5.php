<?php
#Задание5
    function utf8_strrev($str){
        preg_match_all('/./us', $str, $ar);
        return join('',array_reverse($ar[0]));
    }

    function is_palindrom($string)
    {
        if (mb_detect_encoding($string) == 'UTF-8')
        {
            $rev_string = mb_strtolower(utf8_strrev($string));
            if (str_replace(" ", "", $rev_string) == str_replace(" ", "", mb_strtolower($string)))
            {
                return true;
            }
            else
            {
                return false;
            }

        }
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


    if (is_palindrom("А роза упала на лапу Азора"))
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
