<?php

namespace App\Model;

use App\Model\UserProperty\Address;

use Spatie\DataTransferObject\FlexibleDataTransferObject;

class User extends FlexibleDataTransferObject
{
    /**
     * @var int
     */
    public int $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $email;

    /**
     * @var \App\Model\UserProperty\Address
     */
    public Address $address;

    /**
     * @return string
     */
    public function namedEmail(): string
    {
        return "{$this->name} <{$this->email}>";
    }

    /**
     * @param array $userObject
     * @return static
     */
    public static function fromApiResult(array $userObject): self
    {
        return new self($userObject);
    }
}
