<?php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class StubTest extends TestCase
{
    function testStub()
    {
        // 1. Mock origin empty class
        $mockRepo = $this->createMock(SomeClass::class);

        // 2. define the expected results resulted by origin empty class
        $mockProductArray = [
            ['id'=> 1, 'name'=>'Chitatos'],
            ['id' => 2, 'name' => 'Chcocolatos']
        ];

        // 3. call a method from origin empty class and expected results
        $mockRepo->method('doSomething')
                 ->willReturn($mockProductArray);

        $products = $mockRepo->doSomething();
        $this->assertEquals("Chcocolatos", $products[1]['name']);
        $this->assertIsArray($products,'Array of products returend');
    }
}