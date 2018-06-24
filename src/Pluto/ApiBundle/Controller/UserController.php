<?php
/**
 * Created by PhpStorm.
 * User: kajornjitsongsaen
 * Date: 22/6/18
 * Time: 01:33
 */

namespace Pluto\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpKernel\Tests\Controller;

class UserController extends Controller
{
    /**
     * @Rest\View
     */
    public function allAction()
    {
        $users = $this->get('user_repository')->findAll();

        return array('users' => $users);
    }
}