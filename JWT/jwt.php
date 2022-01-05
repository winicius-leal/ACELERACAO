<?php

//key private
$key = 'Ajhdkajsg665612AAA8]0';
//1 - header token
$header = [
    'typ' => 'JWT',
    'alg' => 'HS256'
];

//payload ou body
$payload = [
    'exp' => (new DateTime("now"))->getTimestamp(),
    'uid' => 1526,
    'email' => 'teste@email.com',
    'nivel user'=>'admin',
    'list favorites'=>"sdasd"
];

//2 - convert JSON
$header = json_encode($header);
$payload = json_encode($payload);

//3 - encrypted base_64
$header = base64_encode($header);
$payload = base64_encode($payload);

//4- assinatura
$sign = hash_hmac('sha256', $header. ".". $payload, $key, true);
$sign = base64_encode($sign);


print $header . "." . $payload. "." . $sign;