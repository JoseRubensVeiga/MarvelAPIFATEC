<?php

$apiKey = '22e9bab7b462ebbd01fee470d5c30192';
$md5 = '2f2c9c74055bec710a41226887e7b04e';
$timestamp = '1590024886347';
$base_url = 'https://gateway.marvel.com/v1/public/';

$url = "{$base_url}comics?ts={$timestamp}&apikey={$apiKey}&hash={$md5}";

var_dump(json_decode(file_get_contents($url, true)));