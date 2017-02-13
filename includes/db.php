<?php

$dbc = mysqli_connect($config['db']['host'],
 $config['db']['username'],
 $config['db']['password'],
 $config['db']['db_name']
 ) or DIE('Ошибка подключения к бд: ' . mysqli_error());

?>
