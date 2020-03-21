<?php
    $koneksi = mysqli_connect("localhost", "admin", "@Raffi123", "testarcademy");

    //cek koneksi
    if(mysqli_connect_errno()){
        echo "Koneksi Database gagal : ". mysqli_connect_error();
    }
?>