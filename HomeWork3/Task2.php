<?php
#Задание2
//Массив для записи
    $ChampLeague = array(
        'Tittle' => 'Groups',
        'A' => array(
            1 => 'Arsenal',
            2 => 'Borussia D',
            3 => 'Celtic',
            4 => 'Ajax'
        ),
        'B' => array(
            1 => 'Liverpool',
            2 => 'Barcelona',
            3 => 'Roma FC',
            4 => 'Rostov'
        )

    );

    function array_diff_assoc_recursive($array1, $array2) {
        $difference=array();
        foreach($array1 as $key => $value) {
            if( is_array($value) ) {
                if( !isset($array2[$key]) || !is_array($array2[$key]) ) {
                    $difference[$key] = $value;
                } else {
                    $new_diff = array_diff_assoc_recursive($value, $array2[$key]);
                    if( !empty($new_diff) )
                        $difference[$key] = $new_diff;
                }
            } else if( !array_key_exists($key,$array2) || $array2[$key] !== $value ) {
                $difference[$key] = $value;
            }
        }
        return $difference;
    }

//Создание и запись строки в файл output1
    $json =  json_encode($ChampLeague, JSON_PRETTY_PRINT);
    $file = fopen('output1.json', "w");
    fwrite($file, $json);
    fclose($file);

    $path1 = 'output1.json';
    $path2 = 'output2.json';

    $output1 = file_get_contents($path1);
    $output2 = file_get_contents($path2);

    $arr1 = json_decode($output1, true);
    $arr2 = json_decode($output2, true);

    $res_arr1 = array_diff_assoc_recursive($arr1, $arr2);
    $res_arr2 = array_diff_assoc_recursive($arr2, $arr1);

    echo "Файлы отличаются следующими элементами: "."<br/>";
    echo "output1: "."<br/>";
    print_r($res_arr1);
    echo "<br/>"."output2: "."<br/>";
    print_r($res_arr2);
