<?php

namespace App\Custom;

class Jwt
{
    public static function validate()
    {

    }
    public static function create(User $data)
    {
        $key = $_ENV['JWT_KEY']

        $payLoad = [
            'exp' => time() + 1800,
            'iat' => time(),
            'data' => $data
        ];
        return 
    }
}