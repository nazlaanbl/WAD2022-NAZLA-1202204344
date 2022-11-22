<?php
    $koneksinazla = mysqli_connect("localhost", "root", "", "modul3", 3307);

    if(!$koneksinazla){
        die("<p>koneksi gagal</p>" . mysqli_connect_error());
    }
?>