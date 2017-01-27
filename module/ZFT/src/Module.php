<?php
/**
 * User: Paweł Mleczko
 * Date: 27.01.2017
 * Time: 00:55
 */

namespace ZFT;


use Zend\ModuleManager\Feature\ServiceProviderInterface;

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
        return [];
    }
}