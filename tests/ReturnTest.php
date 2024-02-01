<?php

use PHPUnit\Framework\TestCase;

class ReturnTest extends TestCase
{
    public function testTitleValidation()
    {
        $title = "Pixzarloop";

        if ($title !== null) {
            $result = "Title is a not null : $title";
        } else {
            $result = "Title is null ";
        }

        // Output custom message
        echo $result;

        // Assert that the result is as expected
        $this->assertTrue($title !== null, $result);
    }
}
