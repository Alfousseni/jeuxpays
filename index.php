<html>
  <head>
    <style>
      #countdown {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      body{
        background-color: #021929 !important;
      }
      
      .circle-background {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 200px;
        height: 200px;
        border-radius: 50%;
        border: 10px solid lightgray;
      }
      
      .circle-progress {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 190px;
        height: 190px;
        border-radius: 50%;
        border: 10px solid green;
        clip: rect(0px, 95px, 190px, 0px);
      }
      
      #count {
        font-size: 40px;
      }
    </style>
  </head>
  <body>
    <div id="countdown">
      <div class="circle-background"></div>
      <div class="circle-progress"></div>
      <div id="count">5</div>
    </div>
    <script>
      const countdown = document.getElementById("countdown");
      const circleProgress = document.querySelector(".circle-progress");
      const count = document.getElementById("count");
      let remainingTime = 5;
      const interval = setInterval(() => {
        count.innerHTML = remainingTime;
        circleProgress.style.clip = `rect(0px, ${(remainingTime / 5) * 190}px, 190px, 0px)`;
        if (remainingTime === 0) {
          clearInterval(interval);
          window.location.href = "game.php";
        }
        remainingTime--;
      }, 1000);
    </script>
  </body>
</html>
