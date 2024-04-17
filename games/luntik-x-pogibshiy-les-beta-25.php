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

<div class="contianer">
  <h2>Лунтик Х Погибшый Лес Beta 2.5 (BorisRus)</h2>
  <p style="font-weight:bold;color:red;">*Я использую mega.nz в качестве хранилища файлов, если ссылки не работают, используйте vpn или свяжитесь со мной!*</p>
  <button class="button delete mini-font right, style-two" onclick=" window.open('https://mega.nz/file/0up0zZCR#n22Zs49IqjEMoPXbmannR6WtQpS-HB01NpTQsWc1LtI', '_blank'); return false;">СКАЧАТЬ ИГРУ</button>
<hr class="style-two">
  <body>

	<div>

		<input id="one" name="multiples" type="radio" value="1">
        <label for="one">1</label>

		<input checked id="two" name="multiples" type="radio" value="2">
        <label for="two">2</label>

        <input id="three" name="multiples" type="radio" value="3">
        <label for="three">3</label>

		<div class="container">
			<div class="carousel">
				<img src="https://cdn.glitch.global/13fb00f7-a428-49ba-bc53-2a730456f120/47c1bec9-94b2-4e9d-bff2-9d0ebc762c03.image.png?v=1681273522307" alt="Landscape 1">
        <img src="https://cdn.glitch.global/13fb00f7-a428-49ba-bc53-2a730456f120/bf9bf07d-d3f3-4c70-a32b-c722d818902e.image.png?v=1681273500867" alt="Landscape 2">
				<img src="https://cdn.glitch.global/13fb00f7-a428-49ba-bc53-2a730456f120/da974c38-34a8-4148-9f45-0a4b9439df28.image.png?v=1681273664349" alt="Landscape 3">
			</div>
		</div>

	</div>

</body>
  
  
  <hr class="style-two">
</div>
    <footer>
      <p style="text-align:center;">Unofficial Luntik X Archive | Created by WayflexOfficial | All rights belong to Studio Melnitsa!</p>
    </footer>
  </body>
</html>

<style>
  body > div {
		width: 500px;
		margin: 50px auto;
		text-align: center;
	}

	figure {
		margin: 0;
	}

	.container {
		width: 500px;
		height: 300px;
		text-align: left;
		margin: 60px auto;
		-webkit-perspective: 1000px;
		-webkit-perspective-origin: 50% -25%;
	}

		.carousel {
			-webkit-transform-style: preserve-3d;
			-webkit-transform: translateZ(-540px);
			position: relative;
			margin: 0;
			width: 500px;
			height: 300px;
			-webkit-transition: 1s;
		}

			.carousel img {
				position: absolute;
				border: 15px solid rgba(0, 0, 0, .8);
				opacity: .5;
				-webkit-transition: 1s;
        width: 500px;
        height: 300px;
        background:#ccc;
			}

				
				.carousel img:nth-child(1) { -webkit-transform: translateZ(540px) scale(.8); }
				.carousel img:nth-child(2) { -webkit-transform: rotateY(45deg) translateZ(540px) scale(.8); }
				.carousel img:nth-child(3) { -webkit-transform: rotateY(90deg) translateZ(540px) scale(.8); }
				.carousel img:nth-child(4) { -webkit-transform: rotateY(135deg) translateZ(540px) scale(.8); }
				.carousel img:nth-child(5) { -webkit-transform: rotateY(180deg) translateZ(540px) scale(.8); }
				.carousel img:nth-child(6) { -webkit-transform: rotateY(225deg) translateZ(540px) scale(.8); }
				.carousel img:nth-child(7) { -webkit-transform: rotateY(270deg) translateZ(540px) scale(.8); }
				.carousel img:nth-child(8) { -webkit-transform: rotateY(315deg) translateZ(540px) scale(.8); }

	label {
		cursor: pointer;
		background: #eee;
		display: inline-block;
		border-radius: 50%;
		width: 30px;
		padding-top: 7px;
		height: 23px;
		font: .9em Arial;
	}

	label:hover {
		background: #ddd;
	}

	input {
		position: absolute;
		left: -9999px;
	}

	input:checked + label {
		font-weight: bold;
		background: #ddd;
	}

		input[value="1"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px); }
		input[value="2"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px) rotateY(-45deg); }
		input[value="3"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px) rotateY(-90deg); }
		input[value="4"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px) rotateY(-135deg); }
		input[value="5"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px) rotateY(-180deg); }
		input[value="6"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px) rotateY(-225deg); }
		input[value="7"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px) rotateY(-270deg); }
		input[value="8"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px) rotateY(-315deg); }

		input[value="1"]:checked ~ .container .carousel img:nth-child(1) { -webkit-transform: translateZ(540px) scale(1); opacity: 1; }
		input[value="2"]:checked ~ .container .carousel img:nth-child(2) { -webkit-transform: rotateY(45deg) translateZ(540px) scale(1); opacity: 1; }
		input[value="3"]:checked ~ .container .carousel img:nth-child(3) { -webkit-transform: rotateY(90deg) translateZ(540px) scale(1); opacity: 1; }
		input[value="4"]:checked ~ .container .carousel img:nth-child(4) { -webkit-transform: rotateY(135deg) translateZ(540px) scale(1); opacity: 1; }
		input[value="5"]:checked ~ .container .carousel img:nth-child(5) { -webkit-transform: rotateY(180deg) translateZ(540px) scale(1); opacity: 1; }
		input[value="6"]:checked ~ .container .carousel img:nth-child(6) { -webkit-transform: rotateY(225deg) translateZ(540px) scale(1); opacity: 1; }
		input[value="7"]:checked ~ .container .carousel img:nth-child(7) { -webkit-transform: rotateY(270deg) translateZ(540px) scale(1); opacity: 1; }
		input[value="8"]:checked ~ .container .carousel img:nth-child(8) { -webkit-transform: rotateY(315deg) translateZ(540px) scale(1); opacity: 1; }
</style>

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
</script>