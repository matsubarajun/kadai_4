<?php
// $hello　という変数に　”Hello, “を $name という変数にあなたの名前を、　
//$world という変数に　”‘s World!” を代入して、
//各変数を連結させて “Hello, あなたの名前’s World!” と表示してみましょう
$hello = "Hello, ";
$name = "Matsubara";
$world = "'s World!";

$hello .= $name .= $world;

echo $hello;


