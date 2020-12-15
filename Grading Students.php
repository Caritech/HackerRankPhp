<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function getNextMultipleOf5($v){
    $next_v = 5;
    while($next_v < $v){
        $next_v+= 5;
    }
    return $next_v;
    
}

function gradingStudents($grades) {
    // Write your code here
    $new_grades = [];
    foreach($grades as $g){
        $new_g = $g;
        $next_multiple_of_5 = getNextMultipleOf5($g);
        if( $g >= 38 && $next_multiple_of_5 - $g <= 2 ){
            $new_g = $next_multiple_of_5;
        }
        $new_grades[] = $new_g;
    }
    return $new_grades;
}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
