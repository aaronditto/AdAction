<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testNormalInputSet() {
        $fizzBuzz = new FizzBuzz();
        $inputSet = array(
            1, 2, 3, 4, 5,
            6, 7, 8, 9, 10,
            11, 12, 13, 14, 15,
            16, 17, 18, 19, 20
        );
        $expectedResults = array(
            1, 2, 'fizz', 4, 'buzz',
            'fizz', 7, 8, 'fizz', 'buzz',
            11, 'fizz', 13, 14, 'fizzbuzz',
            16, 17, 'fizz', 19, 'buzz'
        );
        $testResults = $fizzBuzz->process($inputSet);
        $this->assertEquals($expectedResults, $testResults);
    }
}

?>