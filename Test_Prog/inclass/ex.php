<?php
function checkVotingEligibility($age) {
    if ($age >= 18) {
        return "You are eligible to vote.";
    } else {
        return "You are not eligible to vote.";
    }
}

$age = 15;
echo checkVotingEligibility($age);
echo "<br>";

// Function to calculate area of a rectangle
function calculateRectangleArea($length, $width) {
    return $length * $width;
}
$length = 23;
$width = 90;
echo "The area of the rectangle is: " . calculateRectangleArea($length, $width);
echo "<br>";

// Charlie Bites Your Finger
function isBitten() {
    return rand(0, 1) === 1;
}

// Generate Webpage
if (isBitten()) {
    echo "Charlie bit your finger!";
} else {
    echo "Charlie did not bite your finger!";
}

function negateArray(&$x) {
   for ($i = 0; $i < count($x); $i++) {
      $x[$i] *= -1;
   }
}

$nums = [6, -7, 0];
negateArray($nums);
echo $nums[0];

?>