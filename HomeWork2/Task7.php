<?php
#Задание7
    $string = 'Карл у Клары украл Кораллы';
    $new_string = str_replace('К', '', $string);
    echo $string."<br/>";
    echo $new_string."<br/>";

    $string2 = 'Две бутылки лимонада';
    $new_string2 = str_replace('Две', 'Три', $string2);
    $new_string2 = str_replace('лимонада', 'тархуна', $new_string2);
    echo $string2."<br/>";
    echo $new_string2."<br/>";
