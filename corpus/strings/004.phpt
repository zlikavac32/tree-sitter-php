==========
highlight_string() buffering
==========

<?php
$var = highlight_string("<br /><?php echo \"foo\"; ?><br />");
$var = highlight_string("<br /><?php echo \"bar\"; ?><br />", TRUE);
echo "\n[$var]\n";
?>

---

(program  (expression_statement (assignment_expression (variable_name (name)) (function_call_expression (qualified_name (name)) (arguments (string))))) (expression_statement (assignment_expression (variable_name (name)) (function_call_expression (qualified_name (name)) (arguments (string) (qualified_name (name)))))) (echo_statement (string)))

