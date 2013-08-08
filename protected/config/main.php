<?php

/**
 * main.php is the configuration file for application
 *
 * PHP Version 5
 *
 * @category Config
 * @package  Application_Config
 * @author   Elder dos Santos <elderdosantos@gmail.com>
 * @license  GPL http://www.gnu.org/licenses/licenses.html#GPL
 * @link     http://github.com/elderdosantos/rest-yii
 */
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My Web Application',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => true,
            'rules' => array(
                array('usuario/list', 'pattern' => 'usuarios', 'verb' => 'GET', 'parsingOnly' => true),
                array('usuario/insert', 'pattern' => 'usuarios', 'verb' => 'POST', 'parsingOnly' => true),
                array('usuario/delete', 'pattern' => 'usuarios/<id>', 'verb' => 'DELETE', 'parsingOnly' => true),
                array('usuario/get', 'pattern' => 'usuarios/<id>', 'verb' => 'GET', 'parsingOnly' => true),
                array('usuario/update', 'pattern' => 'usuarios/<id>', 'verb' => 'PUT', 'parsingOnly' => true),
            )
        ),
    ),
    'params' => array(
        'adminEmail' => 'webmaster@example.com',
    ),
);