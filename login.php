<?php
session_start();

 $username = $_POST['username'];
 $password = $_POST['password'];
 $con = @mysql_connect('localhost', 'root', '');

mysql_select_db('chatbox', $con);

$result = mysql_query("SELECT * FROM users WHERE `username` ='$username' AND `password` ='$password'");
if(mysql_num_rows($result)) {
    $res = mysql_fetch_array($result);
    
    $_SESSION['username'] = $res['username'];
    echo '<center>';
    echo 'You are now login. click <a href="index.php">here</a> to go back to chat window';
    echo '</center>';
}else {
    echo '<center>';
    echo 'No user found. Please go back enter the correct user <a href="index.php">login</a>.<br>';
    echo 'You may register a new account by clicking <a href="register.php">here</a>';
    echo '</center>';
}










?>