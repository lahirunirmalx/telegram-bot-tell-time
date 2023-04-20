<?php

$apiToken = "5xxxxxxxxx:hashvalue"; // get from bot father
$chat_id = '-100xxxxxxxx'; // u can find this by going to web telegram and opening a chat
$bot_url    = "https://api.telegram.org/bot$apiToken/";
$url        = $bot_url . "sendMessage?chat_id=" . $chat_id ;
while (true){

    $time = date('H:i:s');

    $post_fields = array('chat_id'   => $chat_id,
        'text' =>  "|| $time ||",
        'parse_mode' =>'MarkdownV2',
        'protect_content' =>'true',
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type:multipart/form-data"
    ));
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
    $output = curl_exec($ch);

    var_dump($output);
    sleep(60);
}

