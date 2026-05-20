<?php
echo '<p>$_GET[\'nom\'] ';
if (isset($_GET['nom']))
    echo '-> ' . $_GET['nom'];
else
    echo 'n\'existe pas';
echo '</p>';

echo '<p>$_POST[\'nom\'] ';
if (isset($_POST['nom']))
    echo '-> ' . $_POST['nom'];
else
    echo 'n\'existe pas';
echo '</p>';

echo '<p>$_REQUEST[\'nom\'] ';
if (isset($_REQUEST['nom']))
    echo ' -> ' . $_REQUEST['nom'];
else
    echo 'n\'existe pas';
echo '</p>';
