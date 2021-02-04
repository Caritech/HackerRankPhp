<?php

/*
* sdf sdf sdf sd fsdf
    * Testm Workable
 * Complete the simpleArraySum function below.
 * sdfsdfsdf sdf sdf 
 * s s fsd fs
 */
function simpleArraySum($ar)
{
    /*
     * Write your code here.
     */
    $sum = 0;
    foreach ($ar as $a) {
        $sum += $a;
    }
    return $sum;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = simpleArraySum($ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
