<?php



require "vendor/autoload.php";

$access_token = 'T3LNz+eC1g7X7G6EZo2iPsjlOHXAv6Ri1jbxh+T26c+pF55vxDOrR7p00lDRwJfNCrFrojXUwBrMiOMhH6A6V8hWAaCs+1QnI0WYrNy9rqvjvVvq58JLdiYfwAW1wjAXpx1zFqTzHdyfDiQja8okOwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '396aa2b4a2e848dc8f3579509f8d76e1';

$pushID = 'U8ae0f210252f09619abaa72b194357ce';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







