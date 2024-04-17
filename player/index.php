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
    <title>Плейлист с Геймплеем</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="player-container">
        <iframe id="youtube-player" width="560" height="315"
        src="https://www.youtube.com/embed?listType=playlist&list=PLbpi6ZahtOH6sWdpcYk0hOP6wmUQGt97J&enablejsapi=1"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>
    <div class="message" style="color: red; font-size: 20px; text-align: center; margin-top: 20px;">
        Отправляйте видосы в сообщество чтобы я добавил сюда! :)
    </div>
    <div class="controls">
        <button onclick="prevVideo()">Previous</button>
        <button onclick="nextVideo()">Next</button>
        <button onclick="randomVideo()">Random</button>
        <input type="number" id="videoIndex" placeholder="Enter video number">
        <button onclick="goToVideo()">Go</button>
    </div>
    <script src="scripts.js"></script>
</body>
</html>