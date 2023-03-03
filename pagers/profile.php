<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    


<?php  include ('header.php');?>


<main>




        <div id="hide-vxod">

                <h1 class="zagolovok-vhod">Вхов в<br> Личный кабинет</h1>
                <div class="vxod-profile">
                        <input type="text" class="text-registr" placeholder="Телефон" required>
                        <input type="password" class="text-registr" placeholder="Пароль" required>
                        <input type="submit" value="Отправить" id="send-form" onclick="hide_vxod()">
                </div>
        </div>
      
</main>

<?php include('footer.php') ?>
<script src="../js/script.js"></script>
</body>
</html>