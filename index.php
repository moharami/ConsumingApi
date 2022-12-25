<?php

require_once 'vendor/autoload.php';

use App\Repository\UsersRepository;

$users = UsersRepository::get();
foreach ($users as $user) {
    printf(
        "User %d, %s <%s> lives at:\n%s, %s\n%s %s\n\n",
        $user->id,
        $user->name,
        $user->email,
        $user->address->street,
        $user->address->suite,
        $user->address->zipcode,
        $user->address->city
    );
    echo '<br>';
}