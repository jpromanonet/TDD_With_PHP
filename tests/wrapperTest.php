<?php

require_once 'PHPUnit/Autoload.php';

require_once dirname(__FILE__) . '/../main/index.php';

class WrapperTest extends PHPUnit_Framework_TestCase {
 
    function testCanCreateAWrapper() {
        $wrapper = new Wrapper();
    }
 
}

?>