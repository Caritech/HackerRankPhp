<?php

/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 * ----BNBNB
 * ---HELLO
 * ---HELLO
 * ---HELLO
 * ---HELLO
 */

function birthdayCakeCandles($candles)
{
    // Write your code here sdf sdf
    // Write your code here
    // Write your code here 123
    // Write your code here 456
    $greatest = 0;
    $count_greatest = 0;

    foreach ($candles as $c) {
        if ($c > $greatest) {
            $greatest = $c;
            $count_greatest  = 1; //reset to 1
        } else if ($c == $greatest) {
            $count_greatest++;
        }
    }
    return $count_greatest;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$candles_count = intval(trim(fgets(STDIN)));

$candles_temp = rtrim(fgets(STDIN));

$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($candles);

fwrite($fptr, $result . "\n");

fclose($fptr);
