<?php
/**
 * User: mlecz
 * Date: 27.01.2017
 * Time: 13:01
 */

namespace ZFTest\User;


use PHPUnit_Framework_TestCase;
use Zend\ServiceManager\ServiceManager;
use ZFT\User\MemoryIdentityMap;
use ZFT\User\MysqlDataMapper;
use ZFT\User\Repository;
use ZFT\User\RepositoryFactory;

class RepositoryFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testCanCreateUserRepository() {
        $sm = new ServiceManager();
        $sm->setFactory(MemoryIdentityMap::class, function () {
            return new IdentityMapStub();
        });

        $sm->setFactory(MysqlDataMapper::class, function () {
            return new DataMapperStub();
        });
        $factory = new RepositoryFactory();
        $repository = $factory($sm, RepositoryFactory::class);

        $this->assertInstanceOf(Repository::class, $repository);
    }
}
