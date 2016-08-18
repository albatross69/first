<?php
#Задание3
    $array = array();

    for ($i = 0; $i < 50; $i++)
    {
        $innerArr = array();
        for ($j =0; $j < 2; $j++)
        {
            $innerArr[$j] = rand(1, 100);
        }
        $array[$i] = $innerArr;
    }

    $path = "nums.csv";
    $handle = fopen($path, "w");

    foreach ($array as $field)
    {
        fputcsv($handle, $field, ',');
    }
    fclose($handle);

    $file = fopen($path, "r");

    $result = array();
    while (($data = fgetcsv($file, 200, ",")) !== FALSE)
    {
        $result[] = $data;
    }

    $sum = 0;
    foreach ($result as $item)
    {
        foreach ($item as $value)
        {
            if ($value%2 == 0)
            {
                $sum += $value;
            }
        }
    }
    echo $sum;
