<?php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    function testConnectionHasObject()
    {
        $koneksi = new KoneksiDatabase;
        $koneksi->namaServer ='localhost';
        $koneksi->namaDB = 'algen';
        $koneksi->namaUser = 'root';
        $koneksi->passwordInPlaintext = '';
        $this->assertIsObject($koneksi->konekKeDatabase());
    }
}