<?php

namespace App\Repository;

use GuzzleHttp\Client;
use App\Model\User;

class UsersRepository
{
    /**
     * @return User[]
     */
    public static function get(): array
    {
        $client = new Client();
        $request = $client->get('http://jsonplaceholder.typicode.com/users');
        return array_map(fn($value) => User::fromApiResult($value), json_decode($request->getBody(), true));
    }
}