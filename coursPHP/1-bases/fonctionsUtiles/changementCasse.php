<?php
$x = 'bOnJoUr eT bIeNvEnUe à EnI éCoLe InFoRmAtIqUe';
echo "<p><code>strtolower</code> : " . strtolower($x) . '<br>';
echo "<code>strtoupper</code> : " . strtoupper($x) . '<br>';
echo "<code>ucwords</code> : " . ucwords($x) . '<br>';
echo "<code>ucwords et strtolower</code> : " . ucwords(strtolower($x)) . ' </p>';
