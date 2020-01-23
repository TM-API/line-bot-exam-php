<?php
$access_token = 'T3LNz+eC1g7X7G6EZo2iPsjlOHXAv6Ri1jbxh+T26c+pF55vxDOrR7p00lDRwJfNCrFrojXUwBrMiOMhH6A6V8hWAaCs+1QnI0WYrNy9rqvjvVvq58JLdiYfwAW1wjAXpx1zFqTzHdyfDiQja8okOwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
