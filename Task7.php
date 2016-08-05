<?php
#Задание 7
    echo "<table><tr>";

    for ($i = 1; $i<=10; $i++)
    {
        echo "<td>";
        for ($j = 1; $j<=10; $j++)
        {
            if ($i%2==0 && $j%2==0)
            {
                echo "(".$i*$j.")"."<br/>";
            }
            elseif ($i%2==1 && $j%2==1)
            {
                echo "[".$i*$j."]"."<br/>";
            }
            else
            {
                echo ($i*$j)."<br/>";
            }
        }
        echo "<td/>";
    }

    echo "</tr></table>";
