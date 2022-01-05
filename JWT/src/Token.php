<?php

namespace lista15;

class Token{

    
    protected $key = 'Ajhdkajsg665612AAA8]0';
    protected $header = [
        'typ' => 'JWT',
        'alg' => 'HS256'
    ];
    protected $payload;
    protected $sign;

    public function __construct($data)
    {
        $this->payload = $data;
    }
    public function convertJSON(){
        $this->header = json_encode($this->header);
        $this->payload = json_encode($this->payload);
    }
    public function encryptedBase64(){
        $this->header = base64_encode((string)$this->header);
        $this->payload = base64_encode($this->payload);
    }
    public function generatedSign(){
        $this->sign = hash_hmac('sha256', $this->header. ".". $this->payload, $this->key, true);
        $this->sign = base64_encode($this->sign);
    }

    public function generateToken(){
        $this->convertJSON();
        $this->encryptedBase64();
        $this->generatedSign();
        return $this->header . "." . $this->payload. "." . $this->sign;
    }
    
    
}
