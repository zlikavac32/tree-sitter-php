==========
ZE2 foreach and property visibility
==========

<?php

class base
{
	public $a=1;
	protected $b=2;
	private $c=3;

	function f()
	{
		foreach($this as $k=>$v) {
			echo "$k=>$v\n";
		}
	}
}

class derived extends base
{
}

$o = new base;
$o->d = 4;
echo "===base::function===\n";
$o->f();
echo "===base,foreach===\n";
foreach($o as $k=>$v) {
	echo "$k=>$v\n";
}

$o = new derived;
$o->d = 4;
echo "===derived::function===\n";
$o->f();
echo "===derived,foreach===\n";
foreach($o as $k=>$v) {
	echo "$k=>$v\n";
}

?>

---

(program (class_declaration (name) (property_declaration (property_modifier (visibility_modifier)) (property_element (variable_name (name)) (property_initializer (integer)))) (property_declaration (property_modifier (visibility_modifier)) (property_element (variable_name (name)) (property_initializer (integer)))) (property_declaration (property_modifier (visibility_modifier)) (property_element (variable_name (name)) (property_initializer (integer)))) (method_declaration (function_definition (name) (formal_parameters) (compound_statement (foreach_statement (variable_name (name)) (pair (variable_name (name)) (variable_name (name))) (compound_statement (echo_statement (string)))))))) (class_declaration (name) (class_base_clause (qualified_name (name)))) (expression_statement (assignment_expression (variable_name (name)) (object_creation_expression (qualified_name (name))))) (expression_statement (assignment_expression (member_access_expression (dereferencable_expression (variable_name (name))) (name)) (integer))) (echo_statement (string)) (expression_statement (member_call_expression (dereferencable_expression (variable_name (name))) (name) (arguments))) (echo_statement (string)) (foreach_statement (variable_name (name)) (pair (variable_name (name)) (variable_name (name))) (compound_statement (echo_statement (string)))) (expression_statement (assignment_expression (variable_name (name)) (object_creation_expression (qualified_name (name))))) (expression_statement (assignment_expression (member_access_expression (dereferencable_expression (variable_name (name))) (name)) (integer))) (echo_statement (string)) (expression_statement (member_call_expression (dereferencable_expression (variable_name (name))) (name) (arguments))) (echo_statement (string)) (foreach_statement (variable_name (name)) (pair (variable_name (name)) (variable_name (name))) (compound_statement (echo_statement (string)))))
