<?php
$access_token = 'AbaayhXLKVD6tPXL9hwx/VUUYntUuQCh7xBJBvOTK4g43xQDNZtU6GjSZqVKtX62tyO3+4U1kY3LxOKhp7k4v+22EsItPTKIwjQO/5MNZP2UnS/Turyg2EyL76lmlphyfn1s+riwEaoWimvnU8e+hAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
