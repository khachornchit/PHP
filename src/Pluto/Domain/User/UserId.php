<?php
/**
 * Created by PhpStorm.
 * User: kajornjitsongsaen
 * Date: 22/6/18
 * Time: 01:01
 */

namespace Pluto\Domain\User;


class UserId
{
    private $value;

    public function __construct($value)
    {
        $this->value = (string) $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}