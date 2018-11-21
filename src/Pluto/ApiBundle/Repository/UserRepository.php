<?php
/**
 * Created by PhpStorm.
 * User: kajornjitsongsaen
 * Date: 22/6/18
 * Time: 01:03
 */

namespace Pluto\Domain\User;


interface UserRepository
{
    public function find(UserId $userId);

    public function findAll();

    public function add(User $user);

    public function remove(User $user);
}