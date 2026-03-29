<?php

$count_of_words = readline("Enter the count of words:" . PHP_EOL);


    if(is_numeric($count_of_words)){
    $words = array();
    for($i = 0; $i < $count_of_words; $i++){
        $word = readline("Enter the word:" . PHP_EOL);
        $cleaned_word = trim($word);
        array_push($words,$cleaned_word);
    }

    foreach($words as $word)
        {

            if(strlen($word) > 10){
                    $last_index = strlen($word) - 1;
                    echo $word[0] . strlen($word) - 2 . $word[$last_index];
                }
                else{
                    echo $word;
                }
                echo PHP_EOL;
        }
        
    }

?>