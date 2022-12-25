<?php

namespace App\Model\UserProperty;

use Spatie\DataTransferObject\FlexibleDataTransferObject;

class Address extends FlexibleDataTransferObject
{
    /**
     * @var string
     */
    public string $street, $suite, $city, $zipcode;

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "{$this->street}, {$this->suite}\n{$this->zipcode} {$this->city}";
    }
}
