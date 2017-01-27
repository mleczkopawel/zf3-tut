<?php
/**
 * User: Paweł Mleczko
 * Date: 27.01.2017
 * Time: 00:55
 */

namespace ZFT;


use Zend\ModuleManager\Feature\ServiceProviderInterface;
use Zend\ServiceManager\Factory\InvokableFactory;
use ZFT\User\MemoryIdentityMap;
use ZFT\User\MysqlDataMapper;
use ZFT\User\Repository as UserRepository;
use ZFT\User\RepositoryFactory;

class Module implements ServiceProviderInterface
{

    /**
     * Expected to return \Zend\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getServiceConfig()
    {
        return [
            'factories' => [
                MysqlDataMapper::class => InvokableFactory::class,
                MemoryIdentityMap::class => InvokableFactory::class,
                UserRepository::class => RepositoryFactory::class,
            ],
        ];
    }
}