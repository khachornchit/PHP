<?php
/**
 * Created by PhpStorm.
 * User: kajornjitsongsaen
 * Date: 22/6/18
 * Time: 00:57
 */

namespace Pluto\Domain\User;


class User
{
    private $id;

    private $firstName;

    private $lastName;

    public function __construct(UserId $id, $firstName, $lastName)
    {
        $this->id        = $id;
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
}