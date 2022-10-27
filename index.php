<?php 

// Write a program in the language of your choice, to solve the following problem:
// You need to compute the repartition of banknotes and coins to be able to give the amount X to some people using the minimum number of banknotes/coins.
// Available banknotes/coins are: 0.1, 0.2, 0.5, 1, 2, 5, 10, 20, 50

// Example: if X = 110.20, you need 2 banknotes of 50, one of 10, one coin of 0.2

// LOGIQUE : 
// Insert Banknotes and coins in a table
// Sort the table DESC
// Loop the table  
// If the first value is < to X, we soustract it from X 
// We insert the value in a table
// If the value is > to X, we go to the next value ...


function countMoney($tot) {
    $originalNum = +$tot;
    $num = +$tot;
    $notes = [0.1, 0.2, 0.5, 1, 2, 5, 10, 20, 50];
    rsort($notes);
    $monney = [];

    for ($i=0; $i<count($notes); $i++) {
    if ($num>=$notes[$i]) {
      $num = $num - $notes[$i];
      array_push($monney, $notes[$i]);
      $i--;
    }
  }

    $tot = 'Montant:'. $originalNum . '  Monnaie: '. print_r($monney);
}   

$num = 123;
countMoney($num);

?>