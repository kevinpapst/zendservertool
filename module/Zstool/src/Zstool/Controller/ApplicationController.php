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

/**
 * The ApplicationController.
 * Serving all Application specific actions.
 *
 * @link https://github.com/kevinpapst/zendservertool
 * @author Kevin Papst <k.papst@gmx.net>
 * @package Zstool
 * @subpackage Controller
 */
class ApplicationController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

}
