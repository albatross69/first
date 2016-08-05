<?php
#Задание 6
    $bmw = [
        'model' => 'X5',
        'speed' => 120,
        'doors' => 5,
        'year' => 2015
    ];

    $toyota = [
        'model' => 'Camry',
        'speed' => 90,
        'doors' => 5,
        'year' => 2014
    ];

    $opel = [
        'model' => 'Astra turbo',
        'speed' => 150,
        'doors' => 3,
        'year' => 2013
    ];

    $cars = array(
        'bmw' => $bmw = [
            'model' => 'X5',
            'speed' => 120,
            'doors' => 5,
            'year' => 2015
        ],
        'toyota' => $toyota = [
            'model' => 'Camry',
            'speed' => 90,
            'doors' => 5,
            'year' => 2014
        ],
        'opel' => $opel = [
            'model' => 'Astra turbo',
            'speed' => 150,
            'doors' => 3,
            'year' => 2013
        ]
    );

    foreach ($cars as $mark => $car)
    {
        echo "CAR $mark<br/>";
        foreach ($car as $key => $value )
        {
            echo $value.' ';
        }
        echo "<br/>";
    }
