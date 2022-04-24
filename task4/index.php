
<?php
echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];

echo "<br>";

$current_file_name = basename($_SERVER['PHP_SELF']);
echo "file name"." " . " : " .$current_file_name."\n";


?>

