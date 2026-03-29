<?php

    $numberOfProblems = readline("Enter the number of problems:" . PHP_EOL);

    if(is_numeric($numberOfProblems))
        {
            $problems = array();
            $counter = 0;
            for($i=0; $i<$numberOfProblems; $i++)
                {
                    $problemString = readline("Enter numbers seperated by spaces: ");
                    $currentProblem = explode(" ",$problemString);
                    array_push($problems,$currentProblem);


                    $sum=0;
                    $sum = array_sum($currentProblem);
                    if($sum > 1)
                        {
                            $counter++;
                        }
                    
                    echo PHP_EOL;
                }

                echo $counter;
                
        }

?>