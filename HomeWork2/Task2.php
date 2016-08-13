<?php
#Задание2
    function calc($nums, $operation)
    {
        foreach ($nums as $num)
        {
            if (!is_numeric($num))
            {
                echo 'Массив должен содержать целые числа!';
                exit;
            }


        }
        $res = 0;
        switch ($operation)
        {
            case ($operation == '+'):
                for ($i = 0; $i < count($nums); $i++)
                {
                    if ($i == 0)
                    {
                        $res = $nums[$i];
                        continue;
                    }
                    $res += $nums[$i];
                }
                echo $res;
                break;

            case ($operation == '-'):
                for ($i = 0; $i < count($nums); $i++)
                {
                    if ($i == 0)
                    {
                        $res = $nums[$i];
                        continue;
                    }
                    $res -= $nums[$i];
                }
                echo $res;
                break;

            case ($operation == '*'):
                for ($i = 0; $i < count($nums); $i++)
                {
                    if ($i == 0)
                    {
                        $res = $nums[$i];
                        continue;
                    }
                    $res *= $nums[$i];
                }
                echo $res;
                break;

            case ($operation == '/'):
                for ($i = 0; $i < count($nums); $i++)
                {
                    if ($i == 0)
                    {
                        $res = $nums[$i];
                        continue;
                    }
                    $res /= $nums[$i];
                }
                echo $res;
                break;

            default:
                echo 'Неизвестная операция';
                break;
        }
    }

    $arr = Array(2, 2, 3);

    calc($arr, '+');
