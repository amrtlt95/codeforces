<?php

    $number_of_trails = trim(fgets(STDIN));

    if(is_numeric($number_of_trails))
        {
            $x = 0;

            for($i=0; $i<$number_of_trails; $i++){
                $expression = trim(fgets(STDIN));

                if($expression[0]=="+" || $expression[1] == "+")
                    {
                    $x++;
                    }
                elseif($expression[0]=="-" || $expression[1] == "-")
                    {
                    $x--;

                    }

            }
        


            echo $x;

        }

?>