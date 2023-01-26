<?php
// 【応用】次のプログラムにはバグがあります。
// どこにバグが有るか調べて修正してみましょう(バグは一つとは限りません。)

// $2018_calendar = {
//   "January" => "1月",
//   "February" => "2月"、
//   "March" => "3月",
//   "April" => "4月",
//   "May" => "5月",
//   "June" = "6月",
//   "July" => "7月",
//   "August" => "8月",
//   "September" => "9月",
//   "October" => 10月,
//   "November" => "11月",
//   "December" => "12月"
// };

// 12月を表示する
// echo $2018_calendar[December];

$calender_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $calender_2018["December"];

// 1.変数が数字始め
// 2.配列表現が{}
// 3.2月の後ろが"、"
// 4.6月への連想配列が"="
// 5.echoでの配列表現にて""抜け
