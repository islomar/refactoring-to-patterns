<?php

include 'Options.php';

class FunctionResizeTest extends PHPUnit_Framework_TestCase {

    public function testDumb() {
        $this->assertInstanceOf('Options', new Options);
    }
}

?>
