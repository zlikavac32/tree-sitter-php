==========
ZE2 A private method can only be called inside the class
==========

<?php

class pass {
	private static function show() {
		echo "Call show()\n";
	}

	public static function do_show() {
		pass::show();
	}
}

pass::do_show();
pass::show();

echo "Done\n"; // shouldn't be displayed
?>
--EXPECTF--
Call show()

Fatal error: Uncaught Error: Call to private method pass::show() from context '' in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
