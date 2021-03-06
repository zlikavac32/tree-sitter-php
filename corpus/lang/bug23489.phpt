==========
Bug #23489 (ob_start() is broken with method callbacks)
==========

<?php
class Test {
  function __construct() {
    ob_start(
      array(
        $this, 'transform'
      )
    );
  }

  function transform($buffer) {
    return 'success';
  }
}

$t = new Test;
?>
failure

---

(program  (class_declaration (name) (method_declaration (function_definition (name) (formal_parameters) (compound_statement (expression_statement (function_call_expression (qualified_name (name)) (arguments (array_creation_expression (array_element_initializer (variable_name (name))) (array_element_initializer (string))))))))) (method_declaration (function_definition (name) (formal_parameters (simple_parameter (variable_name (name)))) (compound_statement (return_statement (string)))))) (expression_statement (assignment_expression (variable_name (name)) (object_creation_expression (qualified_name (name))))) (text))
