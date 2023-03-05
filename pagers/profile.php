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

                <h1 class="zagolovok-vhod">Вход в<br> Личный кабинет</h1>
                <div class="vxod-profile">
                        <input type="text" class="text-registr" placeholder="Телефон" required>
                        <input type="password" class="text-registr" placeholder="Пароль" required>
                        <input type="submit" value="Отправить" id="send-form" onclick="hide_vxod()">
                </div>
        </div>


        <div id="profile-true">

                        <div class="prof-info">
                                <p> <span>Имя:</span> Олег</p>
                        </div>

                        <div class="prof-info">
                                <p> <span>Интересы:</span>  кибербезопасность, инфографика</p>
                        </div>
                        <div class="flex">
                                <input type="submit" value="Редактировать" class="profil-btn"> 
                                <input type="submit" value="Сменить пароль" class="profil-btn">
                        </div>
                        <div class="prof-info">
                                <p><span>Мероприятия</span></p>
                        </div> 


                <div class="baner-info-mer">
                        <p> <span>КИБЕРФОРУМ</span> #256894561783 </p>

                        <div class="flex">

                                <div class="banner-info-block">
                                <p> <span>22.03</span></p>
                                <p> <label>13:30</label> </p>
                                </div>

                                <div class="banner-info-block">
                                <p> <span>Игорь никифоров</span></p>
                                <p> <label>Спикер</label> </p>
                                </div>

                                <div class="banner-info-block">
                                <p> <span>Павильен №3 </span></p>
                                <p> <label>Номер зала</label> </p>
                                </div>

                        </div>

                </div>
                <div class="baner-info-mer">
                        <p> <span>КИБЕРФОРУМ</span> #256894561783 </p>

                        <div class="flex">

                                <div class="banner-info-block">
                                <p> <span>22.03</span></p>
                                <p> <label>13:30</label> </p>
                                </div>

                                <div class="banner-info-block">
                                <p> <span>Игорь никифоров</span></p>
                                <p> <label>Спикер</label> </p>
                                </div>

                                <div class="banner-info-block">
                                <p> <span>Павильен №3 </span></p>
                                <p> <label>Номер зала</label> </p>
                                </div>

                        </div>

                </div>
                  <div class="baner-info-mer">
                        <p> <span>КИБЕРФОРУМ</span> #256894561783 </p>

                        <div class="flex">

                                <div class="banner-info-block">
                                <p> <span>22.03</span></p>
                                <p> <label>13:30</label> </p>
                                </div>

                                <div class="banner-info-block">
                                <p> <span>Игорь никифоров</span></p>
                                <p> <label>Спикер</label> </p>
                                </div>

                                <div class="banner-info-block">
                                <p> <span>Павильен №3 </span></p>
                                <p> <label>Номер зала</label> </p>
                                </div>

                        </div>

                </div>



        </div>






      
</main>

<?php include('footer.php') ?>
<script src="../js/script.js"></script>
</body>
</html>