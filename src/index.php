<?php
    $pdo = new PDO("pgsql:host=postgres;port=5432;dbname=testdb", "root", "123");

    //$pdo->exec('CREATE TABLE test (id serial not null, name varchar not null)');

    echo "Hello";