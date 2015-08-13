
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat Box</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script>
        function submitChat() {
            if(form1.msg.value == '') {
                alert('Enter your massage');
                return;
            }
            var msg = form1.msg.value;
            var xmlhttp = new XMLHttpRequest();
            
            xmlhttp.onreadystatechange = function() {
                if(xmlhttp.readyState==4 && xmlhttp.status==200) {
                    document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open('GET', 'insert.php?msg='+msg, true);
            xmlhttp.send();
            
            
        }
        
        $(document).ready(function(e) {
                $.ajaxSetup({cache:false});
                setInterval(function() {
                    $('#chatlogs').load('logs.php');
                }, 1000);
            });
        
    </script>
    
</head>
<body>
    
<?php 

include 'loginform.php'; 
?>
    
    <form action="" name="form1" method="GET">
     <table border="1" align="center">
        <tr>
            <td>user chat name:</td> <td><?php echo $_SESSION['username']; ?></td> <br>
        </tr>
        <tr>
            <td>Your message:</td> <td><textarea name="msg" id="" cols="20" rows="5"></textarea></td>
        <tr>
            <td>
                <a href="#" onclick="submitChat()">Send</a>
            </td>
            <td>
                <a href="logout.php">Log out</a>
            </td>    
        </tr>
         
     </table>
      
<!--        <input type="submit" value="submit" onclick="submitChat()">-->
        
        
    </form>
    
    <div id="chatlogs" style="width:100%; text-align:center" >
        continue to loading...............
    </div>
    
</body>
</html>
