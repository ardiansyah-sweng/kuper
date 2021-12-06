<?php
namespace app;

require 'vendor/autoload.php';

class Kalkulator
{
    function isExist($bilA, $bilB){
        if ($bilA || $bilB){
            return TRUE;
        }
    }

    function isInteger($bilA, $bilB){
        if (is_integer($bilA) && is_integer($bilB)){
            return TRUE;
        }
    }

    function tambah($bilA, $bilB)
    {
        if (!$this->isExist($bilA, $bilB)){
            return 'Bilangan tidak boleh kosong';
        }
        if (!$this->isInteger($bilA, $bilB)) {
            return 'Bilangan harus integer';
        }
        return $bilA + $bilB;
    }

    function createIndividu($cacah)
    {
        for ($i=0; $i < $cacah; $i++){
            $ret[] = rand(0,10);
        }
        return $ret;
    }
}

class Prisma
{
    public $alas;
    public $tinggiSegi3;
    public $tinggiPrisma;

    function __construct($alas, $tinggiSegi3, $tinggiPrisma)
    {
        $this->alas = $alas;
        $this->tinggiSegi3 = $tinggiSegi3;
        $this->tinggiPrisma = $tinggiPrisma;
    }

    function hitungLuasSegi3()
    {
        return (1/2) * $this->alas * $this->tinggiSegi3;
    }

    function hitungVolumePrisma()
    {
        return $this->hitungLuasSegi3() * $this->tinggiPrisma;
    }
}

class Kuper
{
    function createIndividu($numOfIndividu)
    {
        if ($numOfIndividu > 0){
            return true;
        }
    }

    function data()
    {
        $listOfData = [];
        return $listOfData;
    }

    function lists()
    {
        $listOfData = [4,5,3,4];
        return $listOfData;
    }

}

// class Test
// {
//     static function test_tambah_kedua_bilangan_berisi_nilai()
//     {
//         $bilA = 5;
//         $bilB = 10;
//         $kalkulator = new Kalkulator;
//         echo $kalkulator->tambah($bilA, $bilB);
//     }

//     static function test_tambah_ada_bilangan_bukan_integer()
//     {
//         $bilA = '3';
//         $bilB = '';
//         $kalkulator = new Kalkulator;
//         echo $kalkulator->tambah($bilA, $bilB);
//     }

// }

// Test::test_tambah_kedua_bilangan_berisi_nilai();
// echo "\n";
// Test::test_tambah_ada_bilangan_bukan_integer();