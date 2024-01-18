<?php



    if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['psw']))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $psw = $_POST['psw'];

        if (empty($name) || empty($phone) || empty($psw))
        {
            if(empty($name) || strlen($name) <= 2)
            {
                echo "Введите имя";
            }
            if(empty($phone))
            {
                echo "Введите телефон";
            }
            if(empty($psw))
            {
                echo "Введите пароль";
            }
        }
        else
        {
            $pdo = new PDO("pgsql:host=postgres;port=5432;dbname=testdb", "root", "123");

            $stmt = $pdo->prepare('INSERT INTO users (name, phone, pws) values (:name, :phone, :psw)'); //защита от некоректных данных
            $stmt->execute(['name' => $name, 'phone' => $phone, 'psw' => $psw]); //экранирование данных
            //$pdo->exec("INSERT INTO users (name, phone, pws) values ('$name', '$phone', '$psw')");
        }

    }


