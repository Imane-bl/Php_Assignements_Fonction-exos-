<?php

function calculate(int $num_one, int $num_two) {
  return ($num_one+0.0) + ($num_two+0.0) ;
}

echo calculate(20, 10); // 30
echo gettype(calculate(20, 10)); // Double