<?php
function isEven($number) {
    return $number % 2 === 0;
}

function isOdd($number) {
    return $number % 2 !== 0;
}

function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function checkNumber($number) {
    if (isEven($number)) {
        echo "$number is an even number.\n";
    } else {
        echo "$number is an odd number.\n";
    }

    if (isPrime($number)) {
        echo "$number is a prime number.\n";
    } else {
        echo "$number is not a prime number.\n";
    }
}

// Example usage
$number = 29; // Change this number to test with different values
checkNumber($number);
?>
