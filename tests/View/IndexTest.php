<?php

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    function testIndex()
    {
        $welcome = new Index;
        $teks = $welcome->showWelcome();
        $this->assertContains('Welcome', $teks);
    }
}