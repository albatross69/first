<?php
#Задание8
    function print_smile()
    {
        echo ":)";
    }

    function packet_quant($string)
    {
        if (preg_match("/\:\)/", $string))
        {
            print_smile();
            exit;
        }
        preg_match("/packets:([\d]+)/", $string, $res);
        preg_match("/\d+/", $res[0], $result);

        if ($result[0] > 1000)
        {
            echo 'Сеть есть';
        }
        else
        {
            echo 'Сети нет';
        }

    }

    $str = "RX packets:95:) errors:0 dropped:0 overruns:0 frame:0";
    packet_quant($str);
