
<?php

function greeting($name, $sex="") {
    if ($sex == "Male") {
        return "Hello Mr $name";
    } else if($sex=="Female") {
        return "Hello Miss $name";
    }else{
        return "hello $name";
    }
}

// Needed Output
echo greeting("Osama", "Male");
echo "<br>" ;// Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo "<br>" ;
echo greeting("Sameh"); // Hello Sameh
