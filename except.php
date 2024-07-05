<?php

// 我們來看看try catch被丟過一次還會回到try嗎


// try{
//   $arr = [];
//   $arr[] = 123;
//   $arr[] = 456;
//   foreach($arr as $item){
//     if($item == 123){
//       throw new InvalidArgumentException('丟丟丟');
//     }
//     var_dump($item);
//   }

// }catch(\Exception $e){
//   echo $e->getMessage();
// }
// 好啊 456再也不會被執行

// 而且遇到的情境不是其他func catch過了

try{
  $arr = [];
  $arr[] = 123;
  $arr[] = 456;
  foreach($arr as $item){
    if($item == 123){
      throw new InvalidArgumentException('丟丟丟');
    }
    var_dump($item);
  }

}catch(\Exception $e){
  echo $e->getMessage();
}