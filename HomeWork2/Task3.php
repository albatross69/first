<?php
#Задание3
    function cacl_Everything()
    {
        $args = func_get_args();

        for ($i = 1; $i < func_num_args(); $i++)
        {
            if (!is_numeric($args[$i]))
            {
                echo 'Ошибка ввода!';
                exit;
            }
        }

        $res = 0;
        switch ($args[0])
        {
            case ($args[0] == '+'):
            {
                for ($i = 1; $i < func_num_args(); $i++)
                {
                    if ($i == 1)
                    {
                        $res = $args[$i];
                        continue;
                    }
                    $res += $args[$i];
                }
                echo $res;
                break;
            }

            case ($args[0] == '-'):
            {
                for ($i = 1; $i < func_num_args(); $i++)
                {
                    if ($i == 1)
                    {
                        $res = $args[$i];
                        continue;
                    }
                    $res -= $args[$i];
                }
                echo $res;
                break;
            }

            case ($args[0] == '*'):
            {
                for ($i = 1; $i < func_num_args(); $i++)
                {
                    if ($i == 1)
                    {
                        $res = $args[$i];
                        continue;
                    }
                    $res *= $args[$i];
                }
                echo $res;
                break;
            }

            case ($args[0] == '/'):
            {
                for ($i = 1; $i < func_num_args(); $i++)
                {
                    if ($i == 1)
                    {
                        $res = $args[$i];
                        continue;
                    }
                    $res /= $args[$i];
                }
                echo $res;
                break;
            }

            default:
                echo 'Неизвестная операция!';
                break;
        }
    }

    cacl_Everything('+', 1, 2, 3, 4);
