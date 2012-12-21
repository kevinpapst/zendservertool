<?php
/**
 * Zend Server Tool (https://github.com/kevinpapst/zendservertool)
 *
 * @link      https://github.com/kevinpapst/zendservertool
 * @copyright Copyright (c) 2012 Kevin Papst (http://www.kevinpapst.de)
 * @license   https://github.com/kevinpapst/zendservertool/blob/master/LICENSE.txt New BSD License
 */

namespace Zstool;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $e->getApplication()->getServiceManager()->get('translator');
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
