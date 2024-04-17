<?php
session_start();
if(!isset($_SESSION['user'])){
   header("location: ../login.php");
}else{
   $name = $_SESSION['user'][2]; // Assuming the name is stored at index 2
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Официальное Сообщество</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="image-container">
        <img src="https://user-images.githubusercontent.com/64917206/139321698-3c29b357-1c09-48f9-a46f-e55390747c46.png" alt="GameJolt Icon" class="gamejolt-icon">
        <img src="luntikxlogo.png" alt="Luntik" class="profile-image">
    </div>
    <h1>Мунзик X Официальное Сообщество</h1>
    <p>Спеши пока Мельница не подехала! Чем болше нас, тем больше сас!</p>
    <a href="https://example.com" class="join-button">Будет доступно в конце апреля!</a>
</div>
</body>
</html>
