<?php

/*
<<<<<<< HEAD
    * Testm Workable
=======
    * THIS NOT WORKIONG
>>>>>>> 9a46e7ec38ab0f7de54f523b94ce27d39016098c
 * Complete the simpleArraySum function below.
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
