<?php

for ($i = 1; $i <= 20; $i++) {
        $isFizz = (0 === $i % 3);
        $isBuzz = (0 === $i % 5);
        $isFizzBuzz = (0 === $i % 15);

    if (!$isFizz && !$isBuzz && !$isFizzBuzz) {
        echo $i . PHP_EOL;
        continue;
    }

    if ($isFizz) {
        echo 'Fizz';
    }

    if ($isBuzz) {
        echo 'Buzz';
    }
    
    if ($isFizzBuzz) {
        echo 'FizzBuzz';
    }

    echo PHP_EOL;
}

?>