<?php
echo "I'm LINE BOT";

$access_token = 'oli+Kn+x+YXoplW9F4oNL3y2ycYGVd6YOEdPpTPIYFBSmnvmdJJ+9HYBJVPfhNy2YAzXHZzrqw6K5WJwhNjIa/R5f2MwM2er/jmEgbD/fAJOG0xieQ2i9pnr2vtbAll+t0TTgPgKJOlyRd5Z4BpI7gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;