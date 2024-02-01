<?php

use PHPUnit\Framework\TestCase;
use Symfony\Component\Panther\PantherTestCase;

class BookTest extends PantherTestCase
{
    public function testIsbnInputFieldNotEmpty()
    {
        // Start a web server
        $client = self::createPantherClient();

        // Visit the page with the form
        $client->request('GET', '../admin/book_add.php');

        // Select the form and fill in the ISBN input field
        $client->submitForm('form', [
            'isbn' => '123456789', // Fill in with a valid ISBN
            // ... other form fields
        ]);

        // Assert that the ISBN input field is not empty
        $this->assertSelectorExists('input[isbn="isbn"]:not(:empty)');
    }
}
