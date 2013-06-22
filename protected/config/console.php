<?php
/**
 * console.php is the configuration file for console application
 *
 * PHP Version 5
 *
 * @category Tests
 * @package  Application_Tests
 * @author   Elder dos Santos <elderdosantos@gmail.com>
 * @license  GPL http://www.gnu.org/licenses/licenses.html#GPL
 * @link     http://github.com/elderdosantos/rest-yii
 */
return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'My Console Application',
    'preload'=>array('log'),
    'components'=>array(
        'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'CFileLogRoute',
                    'levels'=>'error, warning',
                ),
            ),
        ),
    ),
);