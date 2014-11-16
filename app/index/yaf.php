<?php
class Index_Controller extends Yaf_Controller_Abstract {
    public function indexAction() {
        $_POST['name'] = "new_name";
        //此时对POST的修改, 并不能反映到getPost上
        echo  $this->getRequest()->getPost("name"); //old_name
        echo  "OK";
    }
}
echo  "OK";

