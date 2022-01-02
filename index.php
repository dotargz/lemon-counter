<?php
$file = fopen("phplemons.txt", "r");
$phplemons = fread($file,filesize("phplemons.txt"));


fclose($file);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Mr. Lemons Lemon Counter</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/9cb2f2488a.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="flex">
      <div class="item">
      <h1><i class="fas fa-lemon"></i> Mr. Lemons Lemon Counter</h1>
      <h2>He has <span id="lemons">nan</span> lemons. </h2>
      <p class="live" id="live" style="color:red;"><i class="fas fa-circle fa-beat-fade"></i> CATCHING UP...</p>
      <p>Last Updated: 1/1/2022 - Made with 🍋 by BlueSkye#9999</p>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script>
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}
function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min) + min);
}




async function start() {
  let lemons = 1;
  while (lemons < <?=$phplemons?>) {
    lemons++;
    lemons++;
    lemons++;
    lemons++;
    lemons++;
    lemons++;
    document.getElementById("lemons").innerHTML = lemons.toLocaleString( undefined, { minimumFractionDigits: 2 } );
    await sleep(10);
  }
  document.getElementById("live").innerHTML = "<i class=\"fas fa-circle fa-beat-fade\"></i> LIVE";
  while (lemons >= <?=$phplemons?>) {
    lemons++;
    $.post("update.php", { lemons: lemons });
    window.localStorage.setItem('lemon-count-8f4d6s', lemons);
    document.getElementById("lemons").innerHTML = lemons.toLocaleString( undefined, { minimumFractionDigits: 2 } );
    await sleep(getRandomInt(1500, 3000));
  }
}

start();
      </script>
      </div>
    </div>
  </body>
</html>