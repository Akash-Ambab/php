<?php

$numbers = [4,5];
$scores = [1,2,3, ...$numbers];

print_r($scores);


// for($i = 0; $i < count($array); $i++) {
//     echo depth($array[$i], $num = 1);
//     echo "<br>";

// }



// function depth($array, $num) {
//     // echo $num;
//     foreach($array as $member) {
//         if(is_array($member)) {
//             $num += 1;
//             return $num;
//             depth($member, $num);  
//         }
//     }
// }

// echo end($array);