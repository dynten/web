Sidan du försökte hitta finns inte eller är borttappad!<br>
The page you are looking for is gone or lost!<br>

<br>

<?php
 $page = $_SERVER["REQUEST_URI"];
 echo $page;
 echo "\n";
 $test = explode("/", $page);
 echo $test[(sizeof($page) - 1)];
?>
