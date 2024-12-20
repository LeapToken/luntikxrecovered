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
      overflow: hidden;
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
    .help-text {
      margin-top: 20px;
      font-size: 1.2em;
      color: #666;
    }
    
    @font-face {
      font-family: 'Luntik-Bold';
      src: url('https://cdn.glitch.global/937b658a-f843-41b3-ada5-8bfedfc7ea84/luntik_bold.otf?v=1703021453793') format('opentype');
      font-weight: normal;
      font-style: normal;
    }
    body, html {
      font-family: 'Luntik-Bold', sans-serif;
      height: 100%;
      margin: 0;
      background-color: #f0f0f0;
      overflow-x: hidden;
    }
    #game-tab {
      position: fixed;
      bottom: -100%;
      left: 0;
      width: 100%;
      height: 80vh;
      background-color: #333;
      color: #fff;
      transition: bottom 0.5s ease-in-out;
      z-index: 1000;
    }
    #tab-button {
      position: fixed;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 60px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      z-index: 1100;
    }
    #tab-content {
      padding: 20px;
      text-align: center;
    }
    .dragme{
			position:relative;
			width: 270px;
			height: 203px;
			cursor: move;
		}
	  #draggable {
			background-color: #ccc;
			border: 1px solid #000;
		}
  </style>
</head>
<body>

  <div id="welcome-text">Добро Пожаловать в Архив Лунтика Х</div>
  
  <button id="tab-button" onclick="toggleGameTab()">🎮</button>
  <div id="game-tab">
    <div id="tab-content">
      <h1>Мини Игра :3</h1>
      <iframe src="https://turbowarp.org/1003129547/embed?addons=pause,gamepad,mute-project&interpolate&limitless" width="482" height="393" allowfullscreen allowtransparency allow="autoplay; fullscreen; camera; microphone; gamepad"></iframe>
    </div>
  </div>

  <a class="greeting" style="color:black; text-decoration:none; font-size: 30px;">Привет, <?php echo htmlspecialchars($name); ?>!</a>
  <a class="logout-link" href="logout.php" style="color:black; text-decoration:none; font-size: 30px;"><span class="bo-left">ВЫЙТИ</span></a>

  <div id="buttons-container">
    <button class="animated-button" onclick="window.open('https://forms.gle/kNXfp5f4Ra7dTb4c8', '_blank');">
      <span style="font-size: 2em;">+</span>
      <span>Добавить Игру</span>
    </button>

    <button class="animated-button" onclick="window.open('./archive.php');">
      <span style="font-size: 2em;">📂</span>
      <span>Перейти в Архив</span>
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
  
  <img src="https://cdn.glitch.global/1c9ce23e-3e3d-45e5-baa7-98b679b83fc0/image1773-grir8nkt.png?v=1713492905665" alt="drag-and-drop image script" class="dragme">

  <div class="help-text">Если вы нашли ошыбку на сайте, сообщите мне! :)</div>
  
<script>
  let isTabOpen = false;
  function toggleGameTab() {
    const gameTab = document.getElementById('game-tab');
    if (isTabOpen) {
      gameTab.style.bottom = '-100%';
    } else {
      gameTab.style.bottom = '0';
    }
    isTabOpen = !isTabOpen;
  }
  function startDrag(e) {
				// determine event object
				if (!e) {
					var e = window.event;
				}

				// IE uses srcElement, others use target
				var targ = e.target ? e.target : e.srcElement;

				if (targ.className != 'dragme') {return};
				// calculate event X, Y coordinates
					offsetX = e.clientX;
					offsetY = e.clientY;

				// assign default values for top and left properties
				if(!targ.style.left) { targ.style.left='0px'};
				if (!targ.style.top) { targ.style.top='0px'};

				// calculate integer values for top and left 
				// properties
				coordX = parseInt(targ.style.left);
				coordY = parseInt(targ.style.top);
				drag = true;

				// move div element
					document.onmousemove=dragDiv;
				
        }
        function dragDiv(e) {
          if (!drag) {return};
          if (!e) { var e= window.event};
          var targ=e.target?e.target:e.srcElement;
          // move div element
          targ.style.left=coordX+e.clientX-offsetX+'px';
          targ.style.top=coordY+e.clientY-offsetY+'px';
          return false;
        }
        function stopDrag() {
          drag=false;
        }
        window.onload = function() {
          document.onmousedown = startDrag;
          document.onmouseup = stopDrag;
        }
</script>

</body>
</html>
