<?php

  if(isset($_SESSION['score'])){
?>

<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-color: black;
      font-family: Arial, sans-serif;
    }

  .container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.score-box {
  background-color: #fff;
  padding: 50px;
  border-radius: 10px;
  box-shadow: 4px 4px 8px 0px rgba(0, 0, 0, 0.05), -4px -4px 8px 0px rgba(255, 255, 255, 0.05);
  display: flex;
  flex-direction: column;
  align-items: center;
}

.title {
  font-size: 36px;
  font-weight: bold;
  color: #333;
  text-align: center;
  margin-bottom: 20px;
}

.score {
  font-size: 72px;
  font-weight: bold;
  color: #00FFFF;
  text-align: center;
  margin-top: 20px;
}

.restart-button {
  margin-top: 20px;
  background-color: #00FFFF;
  color: #fff;
  padding: 10px 20px;
  border-radius: 10px;
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
}

  </style>
</head>
<body>
  <div class="container">
    <div class="score-box">
      <div class="title">Score final</div>
      <div class="score">
        <?php echo $_SESSION['score']; ?>
      </div>
      <a href="../index.php"><button class="restart-button">Recommencer</button></a>
    </div>
  </div>
</body>
</html>

<?php }
else {
  header("Location:../index.php");
}
?>
