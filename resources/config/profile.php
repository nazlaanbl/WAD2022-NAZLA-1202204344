<?php
$database = mysqli_connect("localhost", "root", "", "wad_modul4", 3307);
function profile(){
    global $database;

        $query = "SELECT * FROM user_nazla WHERE id = $idprofile";
        $data = mysqli_query($database, $query);
        $baris = [];

        while ($row = mysqli_fetch_assoc($data)){
                $baris[]=$row;
        };

        return $baris;
}

?>