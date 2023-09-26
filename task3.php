<?php

$grades = [85, 92, 78, 88, 95];


// Function to compare grades in descending order
function sortedByDescendingOrder($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? -1 : 1;
}

usort($grades, 'sortedByDescendingOrder');

// Print the sorted grades as an array
print_r($grades);