<?php
    if($_POST['token']){
        $token = $_POST['token'];
        $api  = file_get_contents('https://api.facebook.com/restserver.php?method=auth.expireSession&format=json&access_token='.$token);
        if($api == 'true'){
            echo 'ok';
        }
    }
?>