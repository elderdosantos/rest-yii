<?php
/**
 * bootstrap file test
 *
 * PHP Version 5
 *
 * @category Tests
 * @package  Application_Tests
 * @author   Elder dos Santos <elderdosantos@gmail.com>
 * @license  GPL http://www.gnu.org/licenses/licenses.html#GPL
 * @link     http://github.com/elderdosantos/rest-yii
 */
$yiit=dirname(__FILE__).'/../../../yii/framework/yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once $yiit;
require_once dirname(__FILE__).'/WebTestCase.php';

Yii::createWebApplication($config);
