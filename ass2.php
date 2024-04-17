<?php
function get_arguments(...$all){
 foreach ($all as $al):  
    echo " $al" ;
endforeach;

}
/*
function name(){
$arg=func_get_args();
$all=implode(" ",$arg);
return $all;
}*/

// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School <br>"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP