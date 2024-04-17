<?php
session_start();
if(!isset($_SESSION['user'])){
   header("location: login.php");
}else{
   $name = $_SESSION['user'][2]; // Assuming the name is stored at index 2
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
  <style>
    @font-face {
      font-family: 'Luntik-Bold';
      src: url('https://cdn.glitch.global/937b658a-f843-41b3-ada5-8bfedfc7ea84/luntik_bold.otf?v=1703021453793') format('opentype');
      font-weight: normal;
      font-style: normal;
    }
    body {
      font-family: 'Luntik-Bold', sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
    }

    #welcome-text {
      font-size: 3em;
      margin-bottom: 30px;
      color: #333;
      animation: fadeIn 2s ease-in-out;
    }

    #buttons-container {
      display: flex;
      gap: 20px;
    }

    .animated-button {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 200px;
      height: 200px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 15px;
      cursor: pointer;
      font-size: 1.2em;
      font-family: 'Luntik-Bold', sans-serif;
      transition: background-color 0.3s ease-in-out;
    }

    .animated-button:hover {
      background-color: #45a049;
    }

    @keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }
    .greeting, .logout-link {
      position: fixed;
      top: 20px;
      right: 20px;
      color: white;
      text-decoration: none;
    }
    .greeting {
      right: auto;
      left: 20px;
    }
  </style>
</head>
<body>

  <div id="welcome-text">Добро Пожаловать в Архив Лунтика Х</div>

  <a class="greeting" style="color:black; text-decoration:none; font-size: 30px;">Привет, <?php echo htmlspecialchars($name); ?>!</a>
  <a class="logout-link" href="logout.php" style="color:black; text-decoration:none; font-size: 30px;"><span class="bo-left">ВЫЙТИ</span></a>

  <div id="buttons-container">
    <button class="animated-button" onclick="window.open('https://forms.gle/kNXfp5f4Ra7dTb4c8', '_blank');">
      <span style="font-size: 2em;">+</span>
      <span>Добавить Игру</span>
    </button>

    <button class="animated-button" onclick="window.open('./archive.php');>
      <span style="font-size: 2em;">📂</span>
      <span>Перейти в Архив</span>
    </button>

    <button class="animated-button" onclick="alert('Пока не доступно!')">
      <span style="font-size: 2em;">💬</span>
      <span>Чат</span>
    </button>

    <button class="animated-button" onclick="window.open('/community/index.php');">
      <span style="font-size: 2em;">🌐︎</span>
      <span>Официальное Сообщество</span>
    </button>

    <button class="animated-button" onclick="window.open('/player/index.php');;">
      <span style="font-size: 2em;">🎮</span>
      <span>Плейлист с Геймплеем</span>
    </button>
  </div>

</body>
</html>
