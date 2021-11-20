<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1 class="price-h1 center">Вход в панель Администратора</h1>
    <div class="container">
    <form action="admin_panel.php" method="post" style="text-align:center;">
        <input id="password_label" type="password" name="password" style="width: 50%;" required placeholder="Пароль"><br><br>
        <button type="submit" class="waves-effect waves-light btn-large">Войти</button>
    </form>
    </div>
</body>
</html>