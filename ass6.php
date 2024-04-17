<?php 

function calculate($num1,$num2,$op="a"){
    switch($op){
case "a" :
    return $num1+$num2 . "<br>";
    break;

    case "s":
        return $num1-$num2  . "<br>";
        break;

        case "subtract":
        return $num1-$num2  . "<br>";
        break;

        case "m" :
            return $num1*$num2  . "<br>";
            break;

            case "multiply":
            return $num1*$num2  . "<br>";
            break;


            default:
            return "not found ";
            
        };
      //  return $num1+$num2;
    }
        /*
if(op=="+" || op=="a" ){
    return $num1+$num2;
}else if(op=="-" ||  op=="s" || op=="subtract"){
    return $num1-$num2;
}else if(op=="*" || op=="m" || op== ){
    return $num1*$num2;
}else{
    return  $num1+$num2;
};*/

// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200