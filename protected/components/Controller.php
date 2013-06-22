<?php
/**
 * Controller.php
 *
 * PHP Version 5
 *
 * @category Controller
 * @package  Application_Components
 * @author   Elder dos Santos <elderdosantos@gmail.com>
 * @license  GPL http://www.gnu.org/licenses/licenses.html#GPL
 * @link     http://github.com/elderdosantos/rest-yii
 */
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 *
 * PHP Version 5
 *
 * @category Controller
 * @package  Application_Components
 * @author   Elder dos Santos <elderdosantos@gmail.com>
 * @license  GPL http://www.gnu.org/licenses/licenses.html#GPL
 * @link     http://github.com/elderdosantos/rest-yii
 */
class Controller extends CController
{
    /**
     * Send json encoded data
     *
     * @param mixed $content Content
     *
     * @return void
     */
    protected function send($content = '')
    {
        header('AddDefaultCharset UTF-8');
        header('Content-type: application/json; charset=UTF-8');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');

        if (is_string($content)) {
            $content = array($content);
        }

        echo CJSON::encode($content);
        Yii::app()->end();
    }

    /**
     * Retrieve data send from client
     * Credits to @ericmaicon
     * 
     * @return mixed
     */
    protected function getRequestPayload()
    {
        $content = file_get_contents('php://input');
        $object = json_decode($content);

        if (isset($object)) {
            $tempObject = get_object_vars($object);
        
            $tempArray = array();
        
            foreach ($tempObject as $attribute => $value) {
                if (is_object($value)) {
                    $tempArray[$attribute] = self::objectToArray($value);
                } else {
                    $tempArray[$attribute] = $value;
                }
            }
        
            return $tempArray;
        } else {
            return null;
        }
    }
}