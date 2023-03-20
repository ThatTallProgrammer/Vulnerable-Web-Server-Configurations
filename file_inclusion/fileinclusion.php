<?php
echo "Welcome to my File Inclusion Page. Use the query paramerter 'page='";
echo "\n";
$page = $_GET['page'];
include($page);
?>

