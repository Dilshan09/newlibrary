<?php

use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    public function testIsbnValidation()
    {
        $isbn = 2526;

        if ($isbn !== null && is_numeric($isbn)) {
            $result = "ISBN is a valid number: $isbn";
        } else {
            $result = "ISBN is null or not a valid number";
        }

        // Output custom message
        echo $result;

        // Assert that the result is as expected
        $this->assertTrue($isbn !== null && is_numeric($isbn), $result);
    }
}
