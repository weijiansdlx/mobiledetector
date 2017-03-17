<?php

namespace gulltour\mobiledetect;
use \yii\base\Component;
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'Mobile_Detect.php';

class MobileDetect extends \yii\base\Component
{
    protected $_mobileDetect;
    public function init(){
        parent::init();
        $this->_mobileDetect = new \Mobile_Detect();
    }
    public function __call($name,$arguments){
        return call_user_func_array(array($this->_mobileDetect, $name), $arguments);
    }
}
