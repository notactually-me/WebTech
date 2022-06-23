<?php
  $price = 300;
  $vat = 15;
  $n_price = $price + ($price * ($vat/100));
  echo "Normal price: ", $price, "<br>";
  echo "Price with vat: ",$n_price;
  
 ?>