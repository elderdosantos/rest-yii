<?php
/**
 * test.php is the configuration file for unit testing
 *
 * PHP Version 5
 *
 * @category Tests
 * @package  Application_Tests
 * @author   Elder dos Santos <elderdosantos@gmail.com>
 * @license  GPL http://www.gnu.org/licenses/licenses.html#GPL
 * @link     http://github.com/elderdosantos/rest-yii
 */
return CMap::mergeArray(
    require dirname(__FILE__).'/main.php',
    array(
        'components'=>array(
            'fixture'=>array(
                'class'=>'system.test.CDbFixtureManager',
            ),
        ),
    )
);
