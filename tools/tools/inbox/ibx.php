<?php
if(isset($_POST['data'], $_POST['sl'], $_POST['type'], $_POST['token'])){
    $data = $_POST['data'];
    $num = $_POST['sl'];
    $type = $_POST['type'];
    $token = $_POST['token'];
    $arr = json_decode($data, true);
    arsort($arr);
    $i = 1;
    foreach($arr as $k => $v){
        if($type == 'normal'){
           $info = json_decode(file_get_contents('https://graph.fb.me/'.$k.'?access_token='.$token.'&fields=name&method=get'),true);
           $name = empty($info['name']) ? 'Người dùng Facebook' : $info['name'];
           echo $i. '.  '. $name. ': '.$v."\n";
        }else if($type == 'tag'){
            echo "$i. @[$k:0]:  $v tin nhắn\n";
        }
        $i++;
        if($i == ($num+1)) break;
    }
}else{
    echo 'cop di, cop nua di =))';
}