<?php

require_once 'vendor/autoload.php';

use App\Repository\UsersRepository;

$users = UsersRepository::get();

foreach ($users as $user) {
    printf(
        "User %d, %s lives at:\n\n%s\n\n",
        $user->id,
        $user->namedEmail(),
        $user->address
    );

    echo '<br>';
}