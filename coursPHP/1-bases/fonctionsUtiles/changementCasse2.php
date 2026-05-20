<?php
$x = 'bOnJoUr eT bIeNvEnUe à EnI éCoLe InFoRmAtIqUe';
echo "<p><code>mb_strtolower</code> : " . mb_strtolower($x, 'UTF-8') . '<br>';
echo "<code>mb_strtoupper</code> : " . mb_strtoupper($x, 'UTF-8') . '<br>';
echo "<code>mb_convert_case (MB_CASE_UPPER)</code> : " . mb_convert_case($x, MB_CASE_UPPER, 'UTF-8') . '<br>';
echo "<code>mb_convert_case (MB_CASE_LOWER)</code> : " . mb_convert_case($x, MB_CASE_LOWER, 'UTF-8') . '<br>';
echo "<code>mb_convert_case (MB_CASE_TITLE)</code> : " . mb_convert_case($x, MB_CASE_TITLE, 'UTF-8') . '<br>';
echo "<code>mb_convert_case (MB_CASE_FOLD)</code> : " . mb_convert_case($x, MB_CASE_FOLD, 'UTF-8') . '<br>';