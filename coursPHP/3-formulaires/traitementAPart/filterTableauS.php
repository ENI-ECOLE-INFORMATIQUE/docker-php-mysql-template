<?php
var_dump($_POST);
var_dump(filter_var_array($_POST, FILTER_SANITIZE_SPECIAL_CHARS));
var_dump(filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS));
