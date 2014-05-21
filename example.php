<?php
include("Emotify.php");

$string = "Hello :) My name is Mark :P and I wrote this cute :3 class :P I hope you'll like it :)";

$emotify = new Emotify;

/* normal example */
$emotify->setPath("img");
$emotify->replace($string);
echo $emotify->get();

/* chained example  (uncomment for use) */

# echo $emotify->setPath("img")->replace($string)->get();

?>