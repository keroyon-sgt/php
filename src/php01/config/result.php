<?php


$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$item = htmlspecialchars($_POST['item'], ENT_QUOTES);
$quantity = htmlspecialchars($_POST['quantity'], ENT_QUOTES);

echo "_POST=";
var_dump($_POST);
echo "<br />";


print "お名前：" . $name . " 様<br />";
print "商品名：" . $item . "セット<br />";
print "数量：" . $quantity . " 個<br />";