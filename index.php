<?php
/**
 * Created by PhpStorm.
 * User: Svast
 * Date: 22.01.2018
 * Time: 20:50
 */

$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$text = $output['message']['text'];
file_get_contents("https://api.telegram.org/bot525653361:AAHgI_H7PqBsAnVaeSUzQRllkQE8wUEjShY/sendMessage?chat_id=".$id."&text=".$text."");
file_put_contents("logs.txt",$id);

if ($text='/r4') echo file_get_contents("https://api.telegram.org/bot525653361:AAHgI_H7PqBsAnVaeSUzQRllkQE8wUEjShY/sendMessage?chat_id=".$id."&text=Рейды уровня 4");