<?php

if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password2'])) {
    
    $con = @mysql_connect('localhost', 'root', '');
    mysql_select_db('chatbox',$con);
    
    $uname = $_POST['username'];
    $pword = $_POST['password'];
    $pword2 = $_POST['password2'];
    
    if(!empty($uname)&&!empty($pword)&&!empty($pword2)) {
        if($pword != $pword2) {
            echo 'password do not match';
        }else{
        $checkexist = mysql_query("SELECT `username` FROM `users` WHERE `username`='$uname'");
            if(mysql_num_rows($checkexist)) {
            echo 'Username allready exsist try something else <br>';
        } else {
                mysql_query("INSERT INTO `users`(`username`,`password`) VALUES('$uname', '$pword') ");
                echo 'You have successfully registerd. Click <a href="index.php">here</a> for start chating';
        }
        }
    }else{
        echo 'All field must required';
    }
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register your chat box</title>
</head>
<body>
    
    <form action="register.php" method="POST">
        
        <table align="center" border="1">
            <tr>
                <td>ENTER YOUR USERNAME</td><td><input type="username" name="username"></td>
            </tr>
            <tr>
                <td>ENTER YOUR PASSWORD</td><td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>REPEAT YOUR PASSWORD</td><td><input type="password" name="password2"></td>
            </tr>
            <tr>
                <td ><input type="submit" value="Register"></td>
                <td><a href="index.php">Log in anyway</a></td>
            </tr>
        </table>
        
    </form>
    
    
</body>
</html>