<?php

namespace App\Repository;

use GuzzleHttp\Client;

class UsersRepository
{
    public static function get(): array
    {
        $client = new Client();
        $request = $client->get('http://jsonplaceholder.typicode.com/users');
        return json_decode($request->getBody());
    }
}