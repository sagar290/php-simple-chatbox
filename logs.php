<?php

$con = @mysql_connect('localhost', 'root', '');
mysql_select_db('chatbox',$con);

    $result = mysql_query("SELECT * FROM `logs` ORDER BY id DESC");
        
        while($extract = mysql_fetch_array($result)) {
            echo '<span class="uname">'.$extract['username']. '</span>:</td> <td> <span class="msg">'.$extract['msg']. '</span><br>';
        }

?>
