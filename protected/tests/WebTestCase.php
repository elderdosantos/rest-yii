<?php
/**
 * WebTestCase.php file
 *
 * PHP Version 5
 *
 * @category Tests
 * @package  Application_Tests
 * @author   Elder dos Santos <elderdosantos@gmail.com>
 * @license  GPL http://www.gnu.org/licenses/licenses.html#GPL
 * @link     http://github.com/elderdosantos/rest-yii
 */
/**
 * Change the following URL based on your server configuration
 * Make sure the URL ends with a slash so that we can use relative URLs in test cases
 */
define('TEST_BASE_URL', 'http://localhost/testdrive/index-test.php/');

/**
 * The base class for functional test cases.
 * In this class, we set the base URL for the test application.
 * We also provide some common methods to be used by concrete test classes.
 *
 * PHP Version 5
 *
 * @category Tests
 * @package  Application_Tests
 * @author   Elder dos Santos <elderdosantos@gmail.com>
 * @license  GPL http://www.gnu.org/licenses/licenses.html#GPL
 * @link     http://github.com/elderdosantos/rest-yii
 */
class WebTestCase extends CWebTestCase
{
    /**
     * Sets up before each test method runs.
     * This mainly sets the base URL for the test application.
     *
     * @return void
     */
    protected function setUp()
    {
        parent::setUp();
        $this->setBrowserUrl(TEST_BASE_URL);
    }
}