<?php

 $a=2;
 $b=4;

echo "$a/$b + $b/$a + ($a/$b - $b/$a)" ."<sup>" . $a ."</sup>" . "+". ($a/$a)."="
. ($a/$b + $b/$a + ($a/$b - $b/$a) * ($a/$b - $b/$a) + $a/$a);



?>
