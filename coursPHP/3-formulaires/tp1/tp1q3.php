<?php
$valider = filter_input(INPUT_POST, 'valider', FILTER_SANITIZE_SPECIAL_CHARS);
if (!$valider) {
    ?>
        <form action="#" method="POST">
            <label for="email">E-Mail : </label>
            <input type="email" id="email" name="email">
            <input type="hidden" name="agent" value="<?=$_SERVER['HTTP_USER_AGENT']?>">
            <input type="submit" name="valider" value="Valider">
        </form>
    <?php
} else {
    //$email = filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '#[a-z\.\-0-9]+@[a-z\.\-0-9]+\.[a-z\.\-0-9]+#i']]);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $agent = filter_input(INPUT_POST, 'agent', FILTER_SANITIZE_SPECIAL_CHARS);
    echo 'e-mail : ' . $email . ' ; agent : ' . $agent;
}
