<?php
// include 'koneksi.php';
require 'vendor/autoload.php';

class Main
{
    function isNotConnectedToDB($koneksi)
    {
        if ($koneksi){
            return true;
        }
    }

    function hasRows($numOfRows)
    {
        if ($numOfRows > 0){
            return true;
        }
    }

    function getAllItem()
    {
        $koneksiDB = new KoneksiDatabase;
        $koneksiDB->namaServer = 'localhost';
        $koneksiDB->namaDB = 'algen';
        $koneksiDB->namaUser = 'root';
        $koneksiDB->passwordInPlaintext = '';

        if ($this->isNotConnectedToDB($koneksiDB->konekKeDatabase()->connect_error)){
            die('koneksi ke DB gagal');
        }

        $sql = "SELECT kode, item, item_price, item_picture FROM produk";
        $listOfProduct = $koneksiDB->konekKeDatabase()->query($sql);
        if ($this->hasRows($listOfProduct->num_rows)){
            while ($row = $listOfProduct->fetch_assoc()){
                echo "Kode:". $row["kode"].' Item: '.$row['item'].' Harga: '.$row['item_price'].'<br>';
                echo "<img src='img/" . $row['item_picture'] . "'style='width:200px; height:100px;'><br>";
            }
        } else {
            echo "0 results.";
        }
        
    }
}

$main = new Main;
$main->getAllItem();