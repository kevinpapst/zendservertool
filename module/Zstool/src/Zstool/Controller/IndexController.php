<?php
/**
 * Zend Server Tool (https://github.com/kevinpapst/zendservertool)
 *
 * @link      https://github.com/kevinpapst/zendservertool
 * @copyright Copyright (c) 2012 Kevin Papst (http://www.kevinpapst.de)
 * @license   https://github.com/kevinpapst/zendservertool/blob/master/LICENSE.txt New BSD License
 */

namespace Zstool\Controller;

use Zend\View\Model\ViewModel;
use ZendService\ZendServerAPI\Monitor;
use ZendService\ZendServerAPI\Server;

/**
 * The IndexController.
 * Dashboard of the Zend Server toll application.
 *
 * @link https://github.com/kevinpapst/zendservertool
 * @author Kevin Papst <k.papst@gmx.net>
 * @package Zstool
 * @subpackage Controller
 */
class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $monitor = $this->getServiceLocator()->get('zsapi_monitor');
        // $issues = $monitor->monitorGetIssuesListByPredefinedFilter('default');

        /* @var $monitor Server */
        $server = $this->getServiceLocator()->get('zsapi_server');
        //$infos = $server->getSystemInfo();

        return new ViewModel(array(
            'issues' => array()//$issues
        ));
    }

}
