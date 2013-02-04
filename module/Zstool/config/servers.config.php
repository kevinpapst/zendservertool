<?php
/**
 * Zend Server Tool (https://github.com/kevinpapst/zendservertool)
 *
 * @link      https://github.com/kevinpapst/zendservertool
 * @copyright Copyright (c) 2012 Kevin Papst (http://www.kevinpapst.de)
 * @license   https://github.com/kevinpapst/zendservertool/blob/master/LICENSE.txt New BSD License
 */

return array(
    "servers" => array (
        # Contains a valid default config
        "general" => array(
            "version" => \ZendService\ZendServerAPI\Version::ZSCM56,
            "apiName" => "admin",
            // FIXME would not start up when key is of the correct length
            "fullApiKey" => "xxbee8dde6a95de71932d65cb655c31fc4ea04c1fabaf6f0a1b852617ea332ac",
            "readApiKey" => "",
            "host" => "10.0.0.1",
            "port" => "10083",
            "protocol" => "https"
        ),/*
        "general" => array(
            "version" => \ZendService\ZendServerAPI\Version::ZS56,
            "apiName" => "",
            "fullApiKey" => "",
            "readApiKey" => "",
            "host" => "localhost",
            "port" => "10081"
        )*/
    ),
    "settings" => array (
        'loglevel' => \Zend\Log\Logger::DEBUG
    )
);
