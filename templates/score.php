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
      color: #333;
      text-align: center;
      margin-top: 20px;
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
    </div>
  </div>
</body>
</html>
