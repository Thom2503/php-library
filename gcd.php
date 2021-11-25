<?php
function GCD($x, $y) {
  return ($y == 0) ? $x : GCD($y, $x % $y);
}
?>
