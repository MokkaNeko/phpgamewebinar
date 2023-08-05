<?php
session_start();
if (!isset($_SESSION['randomNumber'])) {
  $_SESSION['randomNumber'] = rand(1, 100);
}
if (isset($_POST['guess'])) {
  $guess = $_POST['guess'];
  if ($guess > $_SESSION['randomNumber']) {
    echo "Too high!";
  } else if ($guess < $_SESSION['randomNumber']) {
    echo "Too low!";
  } else {
    echo "You got it!";
  }
}
?>
<html>

<head>
  <title>First Game</title>
</head>

<body>
  <h1>First Game</h1>
  <p>Guess a number between 1 and 100</p>
  <form action="firstGame.php" method="post">
    <input type="text" name="guess" />
    <input type="submit" value="Submit" />
  </form>
  <form action="reset.php" method="post">
    <input type="submit" value="Reset" />
  </form>
</body>

</html>