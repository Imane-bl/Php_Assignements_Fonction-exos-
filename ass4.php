<?php

function multiply(...$all){
    $res=1;
foreach ($all as $one){
    /*if(is_string($one)){
        unset($one);
   
    }*/if(is_float($one)){
        $one=intval($one);
        //$one=(int)$one;
       
      }else if(is_string($one)){
        continue;
    }
      $res*=$one;
}
 
return $res;
}



// Needed Output
echo multiply(10, 20.6); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000