<?php


$file = fopen("phplemons.txt", "r");
$phplemons = fread($file,filesize("phplemons.txt"));



fclose($file);

echo $phplemons;