<?php

// lets write the data to a file
$file = fopen("data.txt", "a");
fwrite($file, "<p>".$_POST["name"]." Loves to eat ".$_POST["fruit"]."</p>");
fclose($file);

// // lets rickroll the user (lets not)
// header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");

// redirect to index.php
header("Location: index.php");
exit();

?>