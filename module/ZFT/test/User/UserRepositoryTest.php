<?php
/**
 * User: mlecz
 * Date: 27.01.2017
 * Time: 11:31
 */

namespace ZFTest\User;


use PHPUnit_Framework_TestCase;
use ZFT\User\DataMapperInterface;
use ZFT\User\IdentityMapInterface;
use ZFT\User\Repository as UserRepository;

class UserRepositoryTest extends PHPUnit_Framework_TestCase
{
    public function testCreateUserRepositoryObject() {
        $identityMapStub = new IdentityMapStub();
        $dataMapperStub = new DataMapperStub();

        $repository = new UserRepository($identityMapStub, $dataMapperStub);

        $this->assertInstanceOF(UserRepository::class, $repository);
    }

}

class IdentityMapStub implements IdentityMapInterface {

}

class DataMapperStub implements DataMapperInterface {

}