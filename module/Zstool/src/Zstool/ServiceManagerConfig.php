<?php
/**
 * Zend Server Tool (https://github.com/kevinpapst/zendservertool)
 *
 * @link      https://github.com/kevinpapst/zendservertool
 * @copyright Copyright (c) 2012 Kevin Papst (http://www.kevinpapst.de)
 * @license   https://github.com/kevinpapst/zendservertool/blob/master/LICENSE.txt New BSD License
 */

namespace Zstool;

use Zend\ServiceManager\ConfigInterface;
use Zend\ServiceManager\ServiceManager;

/**
 * The Servicemanager configuration.
 * This class should be the only one, manipulating instances within the SM inside the API.
 * Changes from outside are proxied to this class.
 *
 * @link https://github.com/kevinpapst/zendservertool
 * @author Kevin Papst <k.papst@gmx.net>
 * @package Zstool
 */
class ServiceManagerConfig implements ConfigInterface
{

    /**
     * Configure the service manager
     *
     * @see \Zend\ServiceManager\ConfigInterface::configureServiceManager()
     * @param \Zend\ServiceManager\ServiceManager
     */
    public function configureServiceManager (ServiceManager $serviceManager)
    {
        $serviceManager->setInvokableClass('zsapi_server', 'ZendService\ZendServerAPI\Server');
        $serviceManager->setInvokableClass('zsapi_monitor', 'ZendService\ZendServerAPI\Monitor');
        $serviceManager->setInvokableClass('zsapi_deployment', 'ZendService\ZendServerAPI\Deployment');
    }

}