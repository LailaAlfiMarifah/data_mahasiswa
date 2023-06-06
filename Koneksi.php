<?php

    function getConnection() {
        return
        new PDO("mysql:host=localhost;dbname=data_mahasiswa", "root", "", [PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
    }
?>