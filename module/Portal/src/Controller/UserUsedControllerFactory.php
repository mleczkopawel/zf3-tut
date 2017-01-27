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

class UserUsedControllerFactory implements FactoryInterface
{


    /**
     * Create an object
     *
     * @param ContainerInterface $serviceManager
     * @param  string $controllerName
     * @param  null|array $options
     * @throws ServiceNotFoundException if unable to resolve the service
     * @throws ServiceNotCreatedException if an exception is raised when creating a service
     * @throws ContainerException if any other error occurs
     * @return object
     */
    public function __invoke(ContainerInterface $serviceManager, $controllerName, array $options = null)
    {
        if (!class_exists($controllerName)) {
            throw new ServiceNotFoundException('Requested controller name ' . $controllerName . ' does not exist');
        }
        $repository = $serviceManager->get(Repository::class);

        return new $controllerName($repository);
    }
}