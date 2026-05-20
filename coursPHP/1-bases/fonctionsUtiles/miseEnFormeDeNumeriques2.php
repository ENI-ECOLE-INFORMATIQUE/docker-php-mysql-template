<?php
$x = 1234.567;
echo "<p><code>number_format($x)</code> = " . number_format($x) . '<br>';
echo "<code>number_format($x,1)</code> = " . number_format($x, 1) . '<br>';
echo "<code>number_format($x,2,',',' ')</code> = " . number_format($x, 2, ',', ' ') . '</p>';
