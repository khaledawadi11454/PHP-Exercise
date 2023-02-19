<?php
function isPowerOfTwo($n) {
    if($n < 1) {
        return false;
    }

    while($n > 1) {
        if($n % 2 != 0) {
            return false;
        }
        $n = $n / 2;
    }

    return true;
}

// Test the function
if(isPowerOfTwo(4)) {
    echo "4 is power of 2";
} else {
    echo "4 is not power of 2";
}
?>