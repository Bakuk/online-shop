<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form class="form" action="post_registrate.php" method="post">
        <input class="input" name="surname" type="text" placeholder="Ваше имя">
        <input class="input" name="phone" type="tel" placeholder="Ваш телефон">
        <input class="input" name="psw" type="password" placeholder="Пароль">
        <button class="btn" type="submit">Регистрация</button>
    </form>
</body>

<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        color: #000;
        background-color: #f8f8f8;
    }

    * {
        box-sizing: border-box;
    }

    .form {
        max-width: 320px;
        padding: 15px;
        margin: 20px auto;
        background-color: #fff;
    }

    .input {
        display: block;
        width: 100%;
        padding: 8px 10px;
        margin-bottom: 10px;

        border: 1px solid #ccc;

        font-family: inherit;
        font-size: 16px;
    }

    .btn {
        display: block;
        width: 100%;
        padding: 8px 10px;

        border: 0;
        background-color: #1cbc11;
        cursor: pointer;

        font-family: inherit;
        font-size: 16px;
        color: #fff;
    }

    .btn:hover {
        background-color: #14a20a;
    }
</style>
</html>




