<?php
// Call ApiTest::main() if this source file is executed directly.
if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'ApiTest::main');
}

require_once 'PHPUnit/Framework.php';

require_once 'Api.php';

/**
 * Test class for Api.
 * Generated by PHPUnit on 2007-08-20 at 22:00:33.
 */
class ApiTest extends PHPUnit_Framework_TestCase {
    /**
     * Runs the test methods of this class.
     *
     * @access public
     * @static
     */
    public static function main() {
        require_once 'PHPUnit/TextUI/TestRunner.php';

        $suite  = new PHPUnit_Framework_TestSuite('ApiTest');
        $result = PHPUnit_TextUI_TestRunner::run($suite);
    }

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp() {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     */
    protected function tearDown() {
    }

    /**
     * @todo Implement test__destruct().
     */
    public function test__destruct() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}

// Call ApiTest::main() if this source file is executed directly.
if (PHPUnit_MAIN_METHOD == 'ApiTest::main') {
    ApiTest::main();
}
?>
