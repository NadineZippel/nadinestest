<?php

echo 'Aloa <br>' ;

session_start() ;
phpinfo();
echo $_SESSION['test'];

$_SESSION['test'] = 'Hallo';

