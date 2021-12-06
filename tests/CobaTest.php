<?php

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use app\Kalkulator;

class CobaTest extends TestCase
{
    function testCoba()
    {
        $kromosom = new Kalkulator;
        $this->assertIsArray($kromosom->createIndividu(5));
    }

    function testKromosomArrayIsEmpty()
    {
        $kromosom = new Kalkulator;
        $this->assertEmpty($kromosom->createIndividu(0));
    }
}