<?php

session_start();

session_destroy();

echo '<center>';
echo 'you are loged out click <a href="index.php">here</a> to login again';
echo '</center>';

?>