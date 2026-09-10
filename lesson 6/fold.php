<?php
$my_filename = "ds.text";

$my_file = c.php($my_filename,'r');

$my_size =fillsize($my_filename);

$my_filedata = fread($my_file,$my_size);
echo $my_filedata;
?>