<?php

$out_side_arr = [];

// private 沒有class包的PHP func不能用欸...好像在說廢話齁...沒物件哪有私有公有的概念...
function pushElementIntoOutSideArr(&$out_side_arr) { // 指針解
  $out_side_arr[] = 123;
}
pushElementIntoOutSideArr($out_side_arr);

var_dump($out_side_arr);