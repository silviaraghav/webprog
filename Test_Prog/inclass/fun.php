<?php
// Part 1: Charlie Bites Your Finger
function isBitten() {
    return rand(0, 1) === 1;
}

// Part 2: Generate Webpage
if (isBitten()) {
    echo "Charlie bit your finger!";
} else {
    echo "Charlie did not bite your finger!";
}
?>