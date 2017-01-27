<?php
/**
 * User: mlecz
 * Date: 27.01.2017
 * Time: 12:58
 */

namespace ZFT\User;


use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;
use ZFT\User\Repository as UserRepository;


class RepositoryFactory implements FactoryInterface
{

    /**
     * Create an object
     *
     * @param ContainerInterface $serviceManager
     * @param  string $requestedName
     * @param  null|array $options
     * @return object
     * @internal param ContainerInterface $container
     */
    public function __invoke(ContainerInterface $serviceManager, $requestedName, array $options = null)
    {
        $identityMap = $serviceManager->get(MemoryIdentityMap::class);
        $dataMapper = $serviceManager->get(MysqlDataMapper::class);

        return new UserRepository($identityMap, $dataMapper);
    }
}