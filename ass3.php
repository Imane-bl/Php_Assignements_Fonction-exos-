<?php // Write Function Content Here

function sum_all(...$sum){
    $res = 0;
    foreach ($sum as $s) {
        if ($s == 10) {
            $s = 20;
        }else if($s==5){
        continue;
        }
        $res += $s;
    }
    return $res; // Retourne le résultat après avoir parcouru tous les éléments
}

// Sortie attendue
echo sum_all(10, 12, 5, 6, 6, 10);
echo "<br>"; // 64
echo sum_all(5, 10, 5, 10); // 40
