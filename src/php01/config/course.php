<?php


//$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
$company = htmlspecialchars($_GET['company'], ENT_QUOTES);

echo "_POST=";
var_dump($_POST);
echo "<br />";

echo "_GET=";
var_dump($_GET);
echo "<br />";

print "会社名は" . $company . "ですね";