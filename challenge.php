<?php

for ($i=1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo "Linianos"."<br>";
  } elseif ($i % 3 == 0) {
    echo "Linio"."<br>";
  } elseif ($i % 5 == 0) {
    echo "IT"."<br>";
  } else {
    echo $i."<br>";
  }

};

 ?>
