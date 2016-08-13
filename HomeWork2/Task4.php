<?php
#Задание4
    function print_table($rows, $columns)
    {
        if (!is_int($rows) || !is_int($columns))
        {
            echo 'Функция принимает ЦЕЛЫЕ числа';
            exit;
        }
        else
        {
            echo "<table>";
            for ($i = 1; $i < $rows; $i++)
            {
                echo "<tr>";
                for ($j = 1; $j <= $columns; $j++)
                {
                    echo "<td>";
                    echo "$"."$i"."*"."$"."$j"." = ".$i*$j."<br/>";
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }

    print_table(10, 10);
