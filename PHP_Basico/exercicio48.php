<?php   

$arrayDeURLs = [
    "https://random-data-api.com/api/stripe/random_stripe",
    "https://random-data-api.com/api/stripe/random_stripe",
    "https://random-data-api.com/api/app/random_app",
    "https://random-data-api.com/api/beer/random_beer",
    "https://random-data-api.com/api/commerce/random_commerce",
    "https://random-data-api.com/api/device/random_device",
    "https://random-data-api.com/api/subscription/random_subscription"
];

foreach ($arrayDeURLs as $url) {

    $data = file_get_contents($url);
    $file = fopen('api.txt', 'a');
    fwrite($file, $data."\r\n");
    fclose($file);
}

//função nativa para ler um arquivo e trasnformar em uma matriz;

$file = file('api.txt');

$final = [];

foreach ($file as $value) {

    $data = json_decode($value, true);
    
    array_push($final, $data);
}

var_export($final);
