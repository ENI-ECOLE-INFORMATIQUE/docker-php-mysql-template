<?php
$i = 3;
$message = match($i) {
    1 => 'un',
    2, 3 => 'deux ou trois',
    default => 'ni un ni deux ni trois'
};
echo $message;