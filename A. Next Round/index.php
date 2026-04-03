<?php
    $participants_and_k = trim(fgets(STDIN));

    $k=intval(explode(" ",$participants_and_k)[1]);

    $scores =  trim(fgets(STDIN));

    $scores = explode(" ",$scores);

    $k_score = intval($scores[$k-1]);

    $counter = 0;

    foreach($scores as $score)
        {
            $score = intval($score);
            if($score >= $k_score && $score > 0)
                $counter++;
        }

    echo $counter;


?>