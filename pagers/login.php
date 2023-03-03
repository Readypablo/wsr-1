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
    
<div style="display: flex; justify-content: center;">

<h1 class="zagolovok">Регистрация </h1>
    <div class="registration">
        <input type="text" class="text-registr" placeholder="Email" >
            <div class="flex-reg">
                <input type="text" class="text-registr" placeholder="Имя" >
                <input type="text" class="text-registr" placeholder="Телефон" >
            </div>
           
            <textarea id="area-reg" placeholder="Ваши интересы" ></textarea>
          
            <div class="flex-reg">

            <select class="text-registr" >
                <option disabled selected hidden>Дата</option>
                    <option >15.03.23</option>
                    <option >25.05.23</option>
                    <option >19.04.23</option>
                    <option >20.05.23</option>
                    <option >19.04.23</option>
                </select>
                                <select class="text-registr"  >
                <option disabled selected hidden>Направления</option>
                    <option >Машинное обучение</option>
                    <option >Кибербезопасность</option>
                    <option >Разработка мобильных приложений</option>
                </select>
            </div>

            <select class="text-registr" id="oneprog">
                <option disabled selected hidden>Направления</option>
                    <option >Машинное обучение</option>
                    <option >Кибербезопасность</option>
                    <option >Разработка мобильных приложений</option>
                </select>

             <input type="button" value="хотите выбрать еще направление?" onclick="hide_prog()" id="btn-display">
           
                        <p class="user-sogl">Я подтверждаю свое согласие с условиями Пользовательского соглашения и Договором оказания
            услуг по организации мероприятия<input type="checkbox"></p>

                <input type="button" value="Отправить" id="send-form">
    </div>
</div>

</main>

<?php include('footer.php') ?>
<script src="../js/script.js"></script>
</body>
</html>