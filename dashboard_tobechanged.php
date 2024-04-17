<?php
session_start();
if(!isset($_SESSION['user'])){
   header("location: login.php");
}else{
   $name = $_SESSION['user'][2];
}
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- 
      This is an HTML comment
      You can write text in a comment and the content won't be visible in the page
    -->

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://cdn.glitch.global/13fb00f7-a428-49ba-bc53-2a730456f120/favicon?v=1679415137424" />

    <!--
      This is the page head - it contains info the browser uses
      Like the title, which appears on the browser tab but not inside the page
      Further down you'll see the content that displays in the page
    -->
    <title>Архив Лунтика X</title>

    <!-- The website stylesheet -->
    <link rel="stylesheet" href="/style2.css" />

    <!-- The website JavaScript file -->
    <script src="/script.js" defer></script>
  </head>
  <body>
    <div class="banner">
  <div class="content">
    <p>Этот сайт был закрыт до дальнейшего уведомления!</p>
    <button class="close-btn">Скрыть</button>
  </div>
</div>
    
    <div class="top-bar">
  <div id="title">АРХИВ ИГР ЛУНТИКОВ Х</div>
<div id="title" class="right dis-on-mobile"> 
  <span class="bo-left linkHF show-to">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </span>
</div>
  <div id="title" class="right dis-one-web show-to2">
     <span class="bo-left linkHF dis-on-mobile"></span>

    <a style="color:white;text-decoration:none;">Привет, <?php echo $name ?>!</span></a>
    <a style="color:white;text-decoration:none;" href="https://docs.google.com/document/d/e/2PACX-1vTH4lFaqiQ7YOxiVIvZJJfI0f5zDc95WmyV0eJq_PZDciH8uQ2HypzLh9GLFjDLxlmHTvRzWSA0Wwjp/pub" target="_blank" rel="noopener noreferrer"><span class="bo-left">О САЙТЕ</span></a>
    <a style="color:white;text-decoration:none;" href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer"><span class="bo-left">СЛУЖБА ПОДДЕРЖКИ</span></a>
    <a style="color:white;text-decoration:none;" href="https://gamejolt.com/@WayflexOfficial" target="_blank" rel="noopener noreferrer"><span class="bo-left">МОЯ СТРАНИЦА</span></a>
    <a style="color:white;text-decoration:none;" href="logout.php"><span class="bo-left">ВЫЙТИ</span></a>
</div>
</div>

<div class="contianer">
  <h2>Теперь вы можете играть в полностью восстановленные "Лунтик Х" игры и погрузиться в ностальгию!</h2>
  <p style="font-weight:bold;color:red;">*Я использую mega.nz в качестве хранилища файлов, если ссылки не работают, используйте vpn или свяжитесь со мной!*</p>
  <button class="button delete mini-font right, style-two" onclick=" window.open('https://forms.gle/kNXfp5f4Ra7dTb4c8', '_blank'); return false;">ЗАГРУЗИТЬ ЛУНТИК Х ИГРУ</button>
<hr class="style-two">
  <h3>Лунтик Х Страшная Месть Remastered - <a href="games/luntik-x-stashnaya-mest-remastered.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Новогодний Подарок (Snowluwu) - <a href="games/luntik-x-new-years-gift.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Новогодние Приключения (VoidMan01) - <a href="games/luntik-x-novogodnie-priklyuchenie.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Погибшый Лес Beta 2.5 (BorisRus) - <a href="games/luntik-x-pogibshiy-les-beta-25.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Хэллоуин (TvaylatGames) - <a href="games/luntik-halloween.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х 4: Лунная Одиссея (Don4ik) - <a href="games/luntik-x-4-lunnya-odyssey.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Жизнь Гопника (AzazelGames) - <a href="games/luntik-x-jizn-gopnika.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Проклятая Печенька (_LUNTIKX777) - <a href="games/luntik-x-proklyataya-pickenka.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Битва с Омега Лунтиком (DENISFAZBERS) - <a href="games/bitva-s-omega-luntikom.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Р Месть из Ямайки (VoidMan01) - <a href="games/luntik-r-mest-iz-jamaiky.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Дядя Шнюк Х + DLC (Rediara Games Studio) - <a href="games/uncle-shnuck-x-plus-dlc.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х.ЕХЕ (eggmanO) - <a href="games/luntik-x-dot-exe.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Демоническая Вселенная Remastered (Gorfield Slikk) - <a href="games/luntik-x-demonic-universe-remastered.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Приключение в Городе 2 (TvaylatGames) - <a href="games/luntik-x-priklyuchenie-v-gorode-2.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Приключение в Городе (TvaylatGames) - <a href="games/luntik-x-priklyuchenie-v-gorode.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Оригинальная Игра (Saveliy Mladov) - <a href="games/luntik-x-original-game.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Камень Тьмы (Shonnik) - <a href="games/luntik-x-kamen-tmy.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Кузя SVG (Russin) - <a href="games/kuzya-svg.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лапик PNG (Nusa Corp.) - <a href="games/lapik-png.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик ЕХ Новая Версия (Mr.Reber) - <a href="games/luntik-ex-new-version.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Пять Ночей в Офисе Лунтика (MultFNAF) - <a href="games/fnalun-security-office.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Fan Made (MaximDubina) - <a href="games/luntik-x-fan-made.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Fan Made 2 (MaximDubina) - <a href="games/luntik-x-fan-made-2.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Fan Made 3 (MaximDubina) - <a href="games/luntik-x-fan-made-3.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Fan Made 4 (MaximDubina) - <a href="games/luntik-x-fan-made-4.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Luntictale (Nusa Corp.) - <a href="games/luntictale.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х (Dima_Games) - <a href="games/luntik-x-full.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х XI (RussianPizduk) - <a href="games/luntik-xi.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х II (BlazeGames) - <a href="games/luntik-x-ii.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х II 1-2 (BlazeGames) - <a href="games/luntik-x-ii-1-2.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Лунный Монстр (???) - <a href="games/luntik-x-lunyy-monstr.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Настоящий Страх (VoidMan01) - <a href="games/luntik-x-nastoyashchiy-strah.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Не то Измерение (MONSTER Games) - <a href="games/luntik-x-ne-to-izmerenie.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Ночь Кошмара (CrystalGames) - <a href="games/luntik-x-noch-koshmara.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик S (CatStation) - <a href="games/luntik-s.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик в 3D (TvaylatGames) - <a href="games/luntik-3d.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х 3: Демо 1 (T0xan Bro) - <a href="games/luntik-x-3-demo-1.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х 3: Демо 2 (T0xan Bro) - <a href="games/luntik-x-3-demo-2.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Долгожданное Обновление (???) - <a href="games/luntik-x-dolgozhdannoe-obnovlenie.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Force Night ep1 (Egor SonBlockovich) - <a href="games/luntik-x-force-night-ep1.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Глобальная Катастрофа Remastered (???) - <a href="games/luntik-x-globalnaya-katastrofa-remastered.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Кровавая История (CrystalGames) - <a href="games/luntik-x-the-bloody-of-history.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Проклятый Омлет 1.6.0 (Echostone) - <a href="games/luntik-x-the-cursed-omlet-160.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Восход Екзектора (???) - <a href="games/luntik-x-voshod-ekzektora.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Заражение (???) - <a href="games/luntik-x-zarazhenie.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х (???) - <a href="games/luntik-x.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х 2.4 (raindow05) - <a href="games/luntik-x-24.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Ж Зов Луны (Narwhal Fury) - <a href="games/luntik-zh-zov-luny.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Страшная Месть (Nusa Corp.) - <a href="games/luntik-x-strashnaya-mest.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Возвращение (FedotovGames) - <a href="games/luntik-x-return.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х Возвращение ENGLISH (FedotovGames) - <a href="games/luntik-x-return-english.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  <h3>Лунтик Х 3 Кошмара (Dima_Games) - <a href="games/luntik-x-3-koshmara.php" target="_blank" rel="noopener noreferrer">Скачать игру</a> | Ваша игра? <a href="https://forms.gle/368Gyuc9kaRh7nwr5" target="_blank" rel="noopener noreferrer">Связаться со службой поддержки здесь!</a></h3>
  
  <hr class="style-two">
  <button class="button delete mini-font right" onclick=" window.open('https://forms.gle/kNXfp5f4Ra7dTb4c8', '_blank'); return false;">ЗАГРУЗИТЬ ЛУНТИК Х ИГРУ</button>
</div>
    <footer>
      <p style="text-align:center;">Unofficial Luntik X Archive | Created by WayflexOfficial | All rights belong to Studio Melnitsa!</p>
    </footer>
  </body>
</html>

<script>
  // Disable right-click
document.addEventListener('contextmenu', (e) => e.preventDefault());

function ctrlShiftKey(e, keyCode) {
  return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
}

document.onkeydown = (e) => {
  // Disable F12, Ctrl + Shift + I, Ctrl + Shift + J, Ctrl + U
  if (
    event.keyCode === 123 ||
    ctrlShiftKey(e, 'I') ||
    ctrlShiftKey(e, 'J') ||
    ctrlShiftKey(e, 'C') ||
    (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
  )
    return false;
};

document.addEventListener('DOMContentLoaded', function() {
  var closeBtn = document.querySelector('.close-btn');
  var banner = document.querySelector('.banner');
  
  closeBtn.addEventListener('click', function() {
    banner.style.display = 'none';
  });
});

</script>