--TEST--
phpunit --process-isolation MultiDependencyTest ../_files/MultiDependencyTest.php
--FILE--
<?php
define('PHPUNIT_TESTSUITE', TRUE);

$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--process-isolation';
$_SERVER['argv'][3] = 'MultiDependencyTest';
$_SERVER['argv'][4] = dirname(dirname(__FILE__)) . '/_files/MultiDependencyTest.php';

require_once dirname(dirname(dirname(__FILE__))) . '/PHPUnit/Autoload.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

...

Time: %s, Memory: %sMb

OK (3 tests, 2 assertions)

