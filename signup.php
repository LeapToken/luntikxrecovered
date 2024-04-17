<?php
session_start();

// Function to validate email address
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $_SESSION['error'] = "Вы должны ввести действительный адрес электронной почты.";
    } elseif (!isValidEmail($_POST["email"])) {
        $_SESSION['error'] = "Введите действительный адрес электронной почты.";
    } else {
        // Continue with your registration logic
        // ...
        $_SESSION['success'] = "Регистрация прошла успешно!";
        // Redirect or perform any other action after successful registration
        header("Location: success_page.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
  <link rel="icon" href="https://cdn.glitch.global/13fb00f7-a428-49ba-bc53-2a730456f120/favicon?v=1679415137424" />
<div class="with-bg-size" style="position:fixed; top:0px; left:0px; z-index:-2; width:100%; margin:auto;">
  <div id="color-overlay"></div>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
   <title>Архив Лунтика X</title>
</head>
<body>
   <div class="formContainer">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
         <h2 class="title">Регистрация</h2>
         <div class="tip">
            ОТКРЫТАЯ БЕТА v2.4
         </div>
         <?php
         if(isset($_SESSION['error'])){
            echo "<div class='errorMsg'>{$_SESSION['error']}</div>";
            unset($_SESSION['error']);
         }
         if(isset($_SESSION['success'])){
            echo "<div class='successMsg'>{$_SESSION['success']}</div>";
            unset($_SESSION['success']);
         }
         ?>
         <label for="name">Ник</label>
         <input type="text" name="name" autocomplete="off">
         <label for="email">Почта</label>
         <input type="text" name="email" autocomplete="off">
         <label for="password">Пароль</label>
         <div class="input-group">
             <input type="password" name="password" id="password">
             <button type="button" onclick="togglePasswordVisibility()" class="toggle-password">&#128065;</button>
         </div>
         <input type="submit" value="Зарегистрироваться">
      </form>
      <div class="link">
         Уже есть аккаунт? <a href="login.php">Войти!</a>
      </div>
   </div>
<footer class="footer">
  <p style="color:white;">Вебсайт создал: <a href="https://gamejolt.com/@WayflexOfficial" target="_blank" rel="noopener noreferrer" style="color:white;">WayflexOfficial</a> | All rights belong to Studio Melnitsa<br>
</footer>
</body>
</html>
<style>
  body {
  font-family: 'Luntik-Bold', sans-serif;
  margin: 0px;
}

.btn {
  width: 35%;
  padding: 10px 20px;
  background-color: transparent;
  color: white;
  border: 1px solid #ecf0f1;
  border-radius: 3px;
  font-size: 1.0em;
  text-transform: uppercase;
  cursor: pointer;
  text-decoration: none;
  -moz-transition: all .3s ease-in;
  -o-transition: all .3s ease-in;
  -webkit-transition: all .3s ease-in;
  transition: all .3s ease-in;
}

.btn:hover {
  background-color: rgba(22, 160, 133, .7);
}

.card {
  padding-top: 20px;
  padding-bottom: 20px;
  background-color: transparent;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  text-align: center;
}

.input-group {
    position: relative;
    display: flex;
    align-items: center;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 4px;
    overflow: hidden;
}

.input-group input[type="password"] {
    border: none;
    padding: 8px 10px;
    padding-right: 40px; /* make room for the button */
    width: 100%;
    box-sizing: border-box;
}

.toggle-password {
    position: absolute;
    right: 5px;
    border: none;
    background: transparent;
    color: #333;
    cursor: pointer;
    padding: 8px;
}

.input-group input[type="password"]:focus {
    outline: none;
}

.icon-cog {
  color: white;
}

.fa-cog {
  color: white;
}

.btnm {
  width: 35%;
  padding: 5px 5px;
  background-color: transparent;
  color: white;
  border: 1px solid #ecf0f1;
  border-radius: 100%;
  cursor: pointer;
  text-decoration: none;
  -moz-transition: all .3s ease-in;
  -o-transition: all .3s ease-in;
  -webkit-transition: all .3s ease-in;
  transition: all .3s ease-in;
}

.btnm:hover {
  background-color: rgba(22, 160, 133, .7);
}

/* Here Is The CSS For The Background*/

/* An Overlay To Dim The Image And Make Text Readable*/
#color-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(to bottom right, #34495e, #2c3e50);
  opacity: 0.6;
  z-index: -1;
}

/* Setup For An Image That Fits On Most Screens And Resizes*/
.with-bg-size {
  background-image: url("https://cdn.glitch.global/13fb00f7-a428-49ba-bc53-2a730456f120/image_2023-03-29_191724107.png?v=1680139045290");
  width: 100%;
  height: 100%;
  background-position: center;
  background-size: cover;


  -webkit-animation: back 5s infinite; /* Safari 4+ */
  -moz-animation:    back 5s infinite; /* Fx 5+ */
  -o-animation:      back 5s infinite; /* Opera 12+ */
  animation:         back 5s infinite; /* IE 10+, Fx 29+ */


}
/* The Keyframes*/
@keyframes back {
  25% {
    background-image: url("https://cdn.glitch.global/13fb00f7-a428-49ba-bc53-2a730456f120/image_2023-03-29_192203663.png?v=1680139324851");
  }
  50% {
    background-image: url("https://cdn.glitch.global/13fb00f7-a428-49ba-bc53-2a730456f120/image_2023-03-29_192400183.png?v=1680139441061");
  }

  75%{
    background-image: url("https://cdn.glitch.global/13fb00f7-a428-49ba-bc53-2a730456f120/image_2023-03-29_192436136.png?v=1680139477257");
  }

/* Animation Does Not End At 100% Because It Makes The Images Transition In/Out Better For Some Reason*/
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100vw;
  font-family: 'Luntik-Bold', sans-serif;
  font-size: 18px;
  color: black;
  height: 10;
  display: flex;
  align-items: center;
  justify-content: center;
  background: black;
  opacity: 0.6;
}
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

function togglePasswordVisibility() {
    var passwordInput = document.querySelector('.input-group input[name="password"]');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
}
</script>
