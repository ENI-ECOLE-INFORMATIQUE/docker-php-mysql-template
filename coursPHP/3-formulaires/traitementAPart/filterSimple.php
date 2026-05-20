<?php
echo '<code>filter_var($_POST[\'nom\'], FILTER_SANITIZE_SPECIAL_CHARS)</code> -> ';
echo filter_var($_POST['nom'], FILTER_SANITIZE_SPECIAL_CHARS) . '<br>';
echo '<code>filter_input(INPUT_POST, \'nom\', FILTER_SANITIZE_SPECIAL_CHARS)</code> -> ';
echo filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS) . '</p>';
