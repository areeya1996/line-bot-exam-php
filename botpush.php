<?php



require "vendor/autoload.php";

$access_token = 'AbaayhXLKVD6tPXL9hwx/VUUYntUuQCh7xBJBvOTK4g43xQDNZtU6GjSZqVKtX62tyO3+4U1kY3LxOKhp7k4v+22EsItPTKIwjQO/5MNZP2UnS/Turyg2EyL76lmlphyfn1s+riwEaoWimvnU8e+hAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '629a2078401439477d5e95b36d952247';

$pushID = 'Ubb0ff3a4ce7307a400a06046f01293b5';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







