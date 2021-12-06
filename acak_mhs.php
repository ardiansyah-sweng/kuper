<?php
require_once 'files/mahasiswa.php';

class Randomizer
{
    function mainMahasiswaKuper(){
        $index = array_rand((new Mahasiswa())->getMahasiswaKuper());
        return (new Mahasiswa())->getMahasiswaKuper()[$index];
    }
    function mainMahasiswaTesi()
    {
        $index = array_rand((new Mahasiswa())->getMahasiswaTesi());
        return (new Mahasiswa())->getMahasiswaTesi()[$index];
    }
}


echo (new Randomizer())->mainMahasiswaKuper();
//echo (new Randomizer())->mainMahasiswaTesi();