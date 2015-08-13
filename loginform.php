    <?php

session_start();
if(!isset($_SESSION['username'])) {
?>

       <form action="login.php" method="POST" name="form2">
           <table border="1" align="center">
            <tr>
                <td>USERNAME:</td>
                <td><input type="username" name="username"></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Login">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="register.php">Register from here</a>
                </td>
            </tr>
        </table>
       </form>
        
 
<?php
    
    exit;
    }


?>    
    