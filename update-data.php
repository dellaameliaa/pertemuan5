<?php
include "koneksi.php";
$nama_barang = $_GET['nama_barang'];
$harga = $_GET['harga'];
$stok = $_GET['stok'];
$kategori = $_GET['kategori'];
$query = "UPDATE barang SET 
            nama_barang='$nama_barang',
            harga='$harga',
            stok='$stok',
            kategori='$kategori'
        WHERE id='$_GET[id]'
    ";
$mysqli->query($query);
header('location:index.php')