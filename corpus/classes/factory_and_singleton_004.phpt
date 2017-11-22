==========
ZE2 factory and singleton, test 4
==========

<?php
class test {

  private function __construct($x) {
  }
}

$obj = new test;

echo "Done\n";
?>
--EXPECTF--
Fatal error: Uncaught Error: Call to private test::__construct() from invalid context in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
