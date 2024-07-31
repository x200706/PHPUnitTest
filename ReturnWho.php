<?php
function testFunc(){
  try {
    $arr = [1, 3, 4, 5];
    $rtn_arr = [];
    foreach ($arr as $item){
      if ($item === 1){
        $rtn_arr[] = $item;
      } else {
        throw new InvalidArgumentException();
      }
    }
    // return $rtn_arr; // 發生例外後總是不會return這個
  } catch (InvalidArgumentException $e) {
    echo '進例外了啦';
    // return []; // 只會return這個
  }
  // return $rtn_arr; // 只會return裝有第一個的
}
$t = testFunc();
var_dump($t);