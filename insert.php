<?php
session_start();
$uname = $_SESSION['username'];
$msg = $_REQUEST['msg'];
//$uname = $_GET['uname'];
//$msg = $_GET['msg'];
$con = @mysql_connect('localhost', 'root', '');
mysql_select_db('chatbox',$con);

    $query= "INSERT INTO  `logs` (`username`, `msg`) VALUES ('$uname', '$msg')";
    $query_run = mysql_query($query);
    $result = mysql_query("SELECT * FROM `logs` ORDER BY id DESC");
        
        while($extract = mysql_fetch_array($result)) {
            echo $extract['username']. ': '.$extract['msg']. '<br>';
        }


?>