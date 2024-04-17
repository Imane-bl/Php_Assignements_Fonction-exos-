<?php
$message = "Hello";

// Write Your Code Here
$Hello=function ($name){
    global $message;
    return "$message $name";
};


echo $Hello("Osama"); // Hello Osama