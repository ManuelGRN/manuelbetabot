<?php
    require 'vendor/autoload.php';
    define(Telegram, "https://api.telegram.org/bot".$token['254823782:AAHiMavNzaa0PE8kAT-UILdPAXdS7qsej84']);
    $input = file_get_contents("php://input");
    $updates = json_decode($input, true);

    $chat_id = $updates['message']['chat']['id'];
    $message = $updates['message']['text'];

    if($message == "/start"){
        sendMessage("Gne ti amo");
    }

    function sendMessage($chat_id,$message){
        file_get_contents(Telegram."/sendMessage?chat_id=$chat_id&text=$message");
    }
