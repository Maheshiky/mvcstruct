<?php 

echo 'You are in help! How can I help you?<br>';

echo 'Below string comes from the controller, you can access whatever data declared as <b>$this-view->data</b> from here using <b>$this->data</b>';
    
print_r($this->data);