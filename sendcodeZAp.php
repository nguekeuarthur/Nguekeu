<?php
if(isset($_POST['send']))
{
    $mobile = $_POST['email'];
    $subject = $_POST['subdject'];
    ob_start();
    require "allinformation.php";
    $body = ob_get_contents();
ob_clean();
$apiURL = 'https://api.chat-api.com/instance389946/';
$token = 'kh3olo9wr3y5v1qq';

$phone = $mobile;
$data = json_encode(array(
    'chatId'=>$phone.'@c.us',
    'body' =>'https://www.playerofcode.com/whatsapp/'.$body,
    'filename'=>$body,
    'caption'=>$body

));
$url = $apiURL.'message?token='.$token;
$options = stream_context_create(['http'=>[
    'method' => 'POST',
    'header' => 'Content-type:application/json',
    'content' => $data
]

]);
$response = file_get_contents($url,false,$options);
echo $response; exit;
header("location:sendZap.php");



}
?>