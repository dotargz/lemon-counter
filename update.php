<?php
$lemons = $_POST["lemons"];
$file = fopen("phplemons.txt", "w");
$txt = $lemons;
if ($lemons > $file) {
  fwrite($file, $txt);
}



fclose($file);