<?php
session_start();
if(!isset($_SESSION['user'])){
   header("location: login.php");
}else{
   $name = $_SESSION['user'][2];
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Архив Лунтика Х</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style3.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <h1>Игры:</h1>
  <h2>Некоторые игры могут пока быть НЕ доступными!</h2>
  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х: Original Geksology</p>
      <div class="filedata">
        <span>Mr.Reber</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-original-geksology.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х: Новая История демо 0.2</p>
      <div class="filedata">
        <span>Mr.Reber</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-new-story-demo-02.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик: Новый Прекрасный Мир</p>
      <div class="filedata">
        <span>Mr.Reber</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-new-wonderful-world.php';">Download</button>
  </div>
   
  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Страшная Месть Remastered</p>
      <div class="filedata">
        <span>NusaCorporation</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-stashnaya-mest-remastered.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Страшная Месть</p>
      <div class="filedata">
        <span>NusaCorporation</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-stashnaya-mest.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Новогодний Подарок</p>
      <div class="filedata">
        <span>Snowluwu</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-new-years-gift.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Новогодние Приключения</p>
      <div class="filedata">
        <span>VoidMan01</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-novogodnie-priklyuchenie.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Погибшый Лес Beta 2.5</p>
      <div class="filedata">
        <span>BorisRus</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-pogibshiy-les-beta-25.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Хэллоуин</p>
      <div class="filedata">
        <span>TvaylatGames</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-halloween.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х 4: Лунная Одиссея</p>
      <div class="filedata">
        <span>Don4ik</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-4-lunnya-odyssey.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Жизнь Гопника</p>
      <div class="filedata">
        <span>AzazelGames</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-jizn-gopnika.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Проклятая Печенька</p>
      <div class="filedata">
        <span>_LUNTIKX777</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-proklyataya-pickenka.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Битва с Омега Лунтиком</p>
      <div class="filedata">
        <span>DENISFAZBERS</span>
      </div>
    </div>
    <button onclick="window.location.href='games/bitva-s-omega-luntikom.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Р Месть из Ямайки</p>
      <div class="filedata">
        <span>VoidMan01</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-r-mest-iz-jamaiky.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Дядя Шнюк Х + DLC</p>
      <div class="filedata">
        <span>Rediara Games Studio</span>
      </div>
    </div>
    <button onclick="window.location.href='games/uncle-shnuck-x-plus-dlc.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х.ЕХЕ</p>
      <div class="filedata">
        <span>eggman0</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-dot-exe.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Демоническая Вселенная Remastered</p>
      <div class="filedata">
        <span>Gorfield Slikk</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-demonic-universe-remastered.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Приключение в Городе 2</p>
      <div class="filedata">
        <span>TvaylatGames</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-priklyuchenie-v-gorode-2.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Приключение в Городе</p>
      <div class="filedata">
        <span>TvaylatGames</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-priklyuchenie-v-gorode.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Оригинальная Игра</p>
      <div class="filedata">
        <span>Saveliy Mladov</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-original-game.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Камень Тьмы</p>
      <div class="filedata">
        <span>Shonnick</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-kamen-tmy.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Кузя SVG</p>
      <div class="filedata">
        <span>Russin</span>
      </div>
    </div>
    <button onclick="window.location.href='games/kuzya-svg.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лапик PNG</p>
      <div class="filedata">
        <span>Nusa Corporation</span>
      </div>
    </div>
    <button onclick="window.location.href='games/lapik-png.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик ЕХ Новая Версия</p>
      <div class="filedata">
        <span>Mr.Reber</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-ex-new-version.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Пять Ночей в Офисе Лунтика</p>
      <div class="filedata">
        <span>MultFNAF</span>
      </div>
    </div>
    <button onclick="window.location.href='games/fnalun-security-office.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Fan Made</p>
      <div class="filedata">
        <span>MaximDubina</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-fan-made.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Fan Made 2</p>
      <div class="filedata">
        <span>MaximDubina</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-fan-made-2.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Fan Made 3</p>
      <div class="filedata">
        <span>MaximDubina</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-fan-made-3.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Fan Made 4</p>
      <div class="filedata">
        <span>MaximDubina</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-fan-made-4.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Luntictale</p>
      <div class="filedata">
        <span>Nusa Corporation</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntictale.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х</p>
      <div class="filedata">
        <span>Dima_Games</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-full.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х XI</p>
      <div class="filedata">
        <span>RussianPizduk</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-xi.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х II</p>
      <div class="filedata">
        <span>BlazeGames</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-ii.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х II 1-2</p>
      <div class="filedata">
        <span>BlazeGames</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-ii-1-2.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Лунный Монстр</p>
      <div class="filedata">
        <span>???</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-lunyy-monstr.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Настоящий Страх</p>
      <div class="filedata">
        <span>VoidMan01</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-nastoyashchiy-strah.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Не то Измерение</p>
      <div class="filedata">
        <span>MONSTER Games</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-ne-to-izmerenie.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Ночь Кошмара</p>
      <div class="filedata">
        <span>CrystalGames</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-noch-koshmara.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик S</p>
      <div class="filedata">
        <span>CatStation</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-s.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик в 3D</p>
      <div class="filedata">
        <span>TvaylatGames</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-3d.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х 3: Демо 1</p>
      <div class="filedata">
        <span>T0xan Bro</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-3-demo-1.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х 3: Демо 2</p>
      <div class="filedata">
        <span>T0xan Bro</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-3-demo-2.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Долгожданное Обновление</p>
      <div class="filedata">
        <span>???</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-dolgozhdannoe-obnovlenie.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Force Night ep1</p>
      <div class="filedata">
        <span>Egor SonBlockovich</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-force-night-ep1.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Глобальная Катастрофа Remastered</p>
      <div class="filedata">
        <span>???</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-globalnaya-katastrofa-remastered.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Кровавая История</p>
      <div class="filedata">
        <span>CrystalGames</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-the-bloody-of-history.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Проклятый Омлет 1.6.0</p>
      <div class="filedata">
        <span>EchoStone</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-the-cursed-omlet-160.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Восход Екзектора</p>
      <div class="filedata">
        <span>???</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-voshod-ekzektora.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Заражение</p>
      <div class="filedata">
        <span>???</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-zarazhenie.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х</p>
      <div class="filedata">
        <span>???</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х 2.4</p>
      <div class="filedata">
        <span>raindow05</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Ж Зов Луны</p>
      <div class="filedata">
        <span>Narwhal Fury</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-zh-zov-luny.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Страшная Месть</p>
      <div class="filedata">
        <span>Nusa Corporation</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-strashnaya-mest.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Возвращение</p>
      <div class="filedata">
        <span>FedotovGames</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-return.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х Возвращение ENGLISH</p>
      <div class="filedata">
        <span>FedotovGames</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-return-english.php';">Download</button>
  </div>

  <div class="item">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f27d-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><rect class="cls-637647fac3a86d32eae6f27d-1" x="7.23" y="11.05" width="5.73" height="6.68"></rect><polygon class="cls-637647fac3a86d32eae6f27d-1" points="12.96 14.86 15.82 17.73 16.77 17.73 16.77 11.04 15.82 11.04 12.96 13.91 12.96 14.86"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f27d-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
    <div class="filename">
      <p>Лунтик Х 3 Кошмара</p>
      <div class="filedata">
        <span>Dima_Games</span>
      </div>
    </div>
    <button onclick="window.location.href='games/luntik-x-3-koshmara.php';">Download</button>
  </div>

</body>
</html>
