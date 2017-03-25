<?php
$access_token = 'Ldq+q9OSC6FI1qfgnM4oPUbhogxL7g0vm6FvVgjVe0mZrjJ695uCVhtLjPa6ZZzW28sG+Psm0bq8lo4k5ruU9JuyYAwr0xERUkfgz84MWDwrYVIa/4h8ngnvvgPhaBorYQALfzzbGH+1tLaejCa4pwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
