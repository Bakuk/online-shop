<?php

    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $psw = $_POST['psw'];

    $pdo = new PDO("pgsql:host=postgres;port=5432;dbname=testdb", "root", "123");

    $pdo->exec("INSERT INTO users (name, phone, pws) values ('$surname', '$phone', '$psw')");