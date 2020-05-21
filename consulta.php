<?php

$apiKey = '22e9bab7b462ebbd01fee470d5c30192';
$md5 = '2f2c9c74055bec710a41226887e7b04e';
$timestamp = '1590024886347';
$base_url = 'https://gateway.marvel.com/v1/public/';

$characterName = urlencode($_GET['name']);

$urlCharacters = "{$base_url}characters?ts={$timestamp}&apikey={$apiKey}&hash={$md5}&nameStartsWith={$characterName}";

$characters = json_decode(file_get_contents($urlCharacters, true))->data->results;