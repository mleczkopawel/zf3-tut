<?php
/**
 * User: mlecz
 * Date: 27.01.2017
 * Time: 11:12
 */

namespace ZFTest;


use PHPUnit_Framework_TestCase;
use ZFT\Entity\User;

class UserTest extends PHPUnit_Framework_TestCase
{
    public function testCanCreateUserObject() {
        $user = new User();

        $this->assertInstanceOf(User::class, $user);
    }

}