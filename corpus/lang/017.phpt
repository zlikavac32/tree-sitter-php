==========
Testing user-defined function falling out of an If into another
==========

<?php
$a = 1;
function Test ($a) {
	if ($a<3) {
		return(3);
	}
}

if ($a < Test($a)) {
	echo "$a\n";
	$a++;
}
?>

---

(program  (expression_statement (assignment_expression (variable_name (name)) (integer))) (function_definition (name) (formal_parameters (simple_parameter (variable_name (name)))) (compound_statement (if_statement (binary_expression (variable_name (name)) (integer)) (compound_statement (return_statement (parenthesized_expression (integer))))))) (if_statement (binary_expression (variable_name (name)) (function_call_expression (qualified_name (name)) (arguments (variable_name (name))))) (compound_statement (echo_statement (string)) (expression_statement (update_expression (variable_name (name)))))))
