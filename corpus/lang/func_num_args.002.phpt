==========
func_num_args with variable number of args
==========

<?php

function foo($a)
{
	var_dump(func_num_args());	
}
foo(1, 2, 3);

?>

---
