<?php

$out_side_arr = [];

function pushElementIntoOutSideArr(&$out_side_arr) { // 指針解
  $out_side_arr[] = 123;
}
pushElementIntoOutSideArr($out_side_arr);

var_dump($out_side_arr);