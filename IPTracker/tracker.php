<?php

// $_SERVER['REMOTE_ADDR'] <- address;
$url = "http://ip-api.com/php/5.10.34.66?fields=status,country,countryCode,regionName,city,lat,lon,currency,isp,org,query";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);

$response=unserialize($response_json);
