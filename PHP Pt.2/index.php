<?php

$teacher = "Silas";
function myTest() {
    global $teacher;
    $learner = "Kenan";
    //echo $teacher. " teaches ". $learner;
};
myTest();
//echo $learner;

function numbers() {
    return 14 + 21;
};
$allNumbers = numbers();
//echo $allNumbers."<br>";

$list = ["Cell", "Tissue", "Organ", "Organ System", "System"];
//echo count($list);

$array = in_array("Cell", $list);
$list[]="Smart";
array_unshift($list, "Idk what to put here");
print_r($list);
unset($list[2]);
print_r($list)
?>