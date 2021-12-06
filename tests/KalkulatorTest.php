<?php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use app\Kalkulator;
use app\Prisma;
use app\Kuper;

class KalkulatorTest extends TestCase
{
    function testTambahSukses()
    {
        $kalkulator = new Kalkulator;
        $this->assertEquals(73, $kalkulator->tambah(40, 33));
    }

    function testBilNotInteger()
    {
        $kalkulator = new Kalkulator;
        $this->assertEquals('Bilangan harus integer', $kalkulator->tambah(34, 'c'));
    }

    function testBilIsNotEmpty()
    {
        $kalkulator = new Kalkulator;
        $this->assertEquals('Bilangan tidak boleh kosong', $kalkulator->tambah(null,null));
    }

    /** @test */
    function individuInArray()
    {
        $individu = new Kalkulator;
        $this->assertIsArray($individu->createIndividu(5));
    }

    function testIndividuIsNotAnArray()
    {
        $individu = rand(5, 9);
        $this->assertIsNotArray($individu);
    }

    function testHitungLuasSegi3()
    {
        $prisma = new Prisma(3,4,7);
        $this->assertEquals(6, $prisma->hitungLuasSegi3());
    }

    function testHitungVolumePrisma()
    {
        $prisma = new Prisma(3, 4, 7);
        $this->assertEquals(42, $prisma->hitungVolumePrisma());
    }    

    /** @test */
    public function createIndividu()
    {
        $kuper = new Kuper;
        $this->assertTrue($kuper->createIndividu(1));
    }

    /** @test */
    public function data()
    {
        $kuper = new Kuper;
            $this->assertEmpty($kuper->data(), 'Kosong');
    }
    
    function testLists()
    {
        $kuper = new Kuper;
        $this->assertNotEmpty($kuper->lists(), 'Ada');
    }
}