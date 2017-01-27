<?php
/**
 * User: mlecz
 * Date: 27.01.2017
 * Time: 13:20
 */

namespace Portal\Controller;


use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;
use ZFT\User\Repository;

class IndexControllerFactory implements FactoryInterface
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
        $repository = $serviceManager->get(Repository::class);

        return new IndexController($repository);
    }
}