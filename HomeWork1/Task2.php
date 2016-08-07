<?php
#Задание 2
    $drawings = 80;
    $by_felt_pen = 23;
    $by_pencils = 40;
    $by_paints = $drawings - ($by_felt_pen + $by_pencils);

    echo 'Красками выполнено '.$drawings.'-('.$by_pencils.'+'.$by_felt_pen.') = '.$by_paints.' рисунков';
