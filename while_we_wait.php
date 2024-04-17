<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winter Countdown</title>
    <style>
        @font-face {
            font-family: 'Luntik-Bold';
            src: url('https://cdn.glitch.global/937b658a-f843-41b3-ada5-8bfedfc7ea84/luntik_bold.otf?v=1703021453793') format('opentype');
            font-weight: normal;
            font-style: normal;
        }
      
        body {
            background-color: #87CEEB; /* Sky Blue */
            text-align: center;
            font-family: 'Luntik-Bold', sans-serif;
            margin: 0;
            padding: 0;
        }

        #container {
            margin: 50px;
            padding: 20px;
            background-color: #FFFFFF; /* White */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        #timer {
            font-size: 24px;
            margin-top: 20px;
        }

        #login-text {
            margin-top: 20px;
            font-size: 18px;
        }

        #login-button {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50; /* Green */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div id="container">
    <h1>Что-то большое готовится...</h1>
    <div id="timer"></div>
    <div id="login-text">Админ? Войди здесь!</div>
    <button id="login-button" onclick="redirectToAnotherPage()">Войти</button>
</div>

  <script>
      // Set the date we're counting down to
      const countDownDate = new Date("January 5, 2024 00:00:00").getTime();

      // Update the countdown every 1 second
      const x = setInterval(function() {
          // Get the current date and time
          const now = new Date().getTime();

          // Calculate the remaining time
          const distance = countDownDate - now;

          // Calculate days, hours, minutes, and seconds
          const days = Math.floor(distance / (1000 * 60 * 60 * 24));
          const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          const seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // Display the countdown
          document.getElementById("timer").innerHTML = days + "d " + hours + "h "
              + minutes + "m " + seconds + "s ";

          // If the countdown is over, display a message
          if (distance < 0) {
              clearInterval(x);
              document.getElementById("timer").innerHTML = "EXPIRED";
          }
      }, 1000);

      function redirectToAnotherPage() {
          // Change the URL to the desired page
          window.location.href = '/admin_login.php';
      }
  </script>

</body>
</html>