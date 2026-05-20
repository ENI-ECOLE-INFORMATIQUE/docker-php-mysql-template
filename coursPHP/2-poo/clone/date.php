<?php
$debut = new \DateTime();
$fin = $debut->add(DateInterval::createFromDateString('1 hour'));
echo '<p>début : '.$debut->format("H:i:s").'</p>';
echo '<p>fin : '.$fin->format("H:i:s").'</p>';
