==========
Test ++N operator : various numbers as strings
==========

<?php

$strVals = array(
    "0","65","-44", "1.2", "-7.7",
    "abc", "123abc", "123e5", "123e5xyz", " 123abc", "123 abc", "123abc ", "3.4a", "a5.9",
    "z", "az", "zz", "Z", "AZ", "ZZ", "9z", "19z", "99z",
);


foreach ($strVals as $strVal) {
    echo "--- testing: '$strVal' ---\n";
    var_dump(++$strVal);
}

?>
===DONE===

---

(program  (expression_statement (assignment_expression (variable_name (name)) (array_creation_expression (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string)) (array_element_initializer (string))))) (foreach_statement (variable_name (name)) (variable_name (name)) (compound_statement (echo_statement (string)) (expression_statement (function_call_expression (qualified_name (name)) (arguments (update_expression (variable_name (name)))))))) (text))

