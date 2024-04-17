<?php

function check_status($a, $b, $c) {
    $all=[$a,$b,$c];
     foreach ($all as $one){
        if(is_string($one)){
            $name=$one;
        }else if(is_int($one)){
            $age=$one;
        }else if(is_bool($one)){
            if($one=='true'){
                $avilb="You Are Available For Hire";
            }else{
                $avilb=" You Are NOT Available For Hire";
            }
    
        }

     }

        return 'Hello' . $name .'Your Age Is'. $age . $avilb;
    
    }
  // Function Code Here


// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo '<br>';
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo '<br>';
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo '<br>';
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"