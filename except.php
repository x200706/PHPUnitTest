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
// try{
//   $arr = [];
//   $arr[] = 123;
//   $arr[] = 456;
//   foreach($arr as $item){
//     if($item == 123){
//       throwThenCatch();
//     }
//     var_dump($item); // 嗯？？456有執行啊 跟你說連123都執行= =
//     /*
//     丟丟丟int(123)
//     int(456)
//     */
//   }

// }catch(\Exception $e){
//   echo $e->getMessage();
// }


// function throwThenCatch(){
//   try{
//     throw new InvalidArgumentException('丟丟丟');
//   }catch(InvalidArgumentException $e){
//     echo $e->getMessage();
//   }
// }

// 但我有個假說 如果catch區塊又有例外呢？寄信套件損壞或rollback引發的例外（誰叫你事務亂寫）
// try{
  try{
    $arr = [];
    $arr[] = 123;
    $arr[] = 456;
    foreach($arr as $item){
      if($item == 123){
        throwThenCatch(); 
      }
      doSomethingForSomeone($item); // 類比commit這個動作 嗯？？456有執行啊 跟你說連123都執行= =
    }
    echo "這裡是最後一行\n";
  
  }catch(\Exception $e){
    echo $e->getMessage();
    throw new InvalidArgumentException("catch裡面丟丟丟\n"); // 會變成說沒有人catch欸...寶寶你去哪了🥺
    // 其實我不確定Laravel command會不會跟API一樣有個最後的catcher（可能要翻有無人時做）
    // 但如果有 我log也要看到例外才是啊🤔
    // 無論如何程式直接去世都令人困惑
  }
// } catch(InvalidArgumentException $e){
//   echo '未知心靈捕手'; // 咦不會被執行......AI亂教
// }

function throwThenCatch(){
  try{
    throw new InvalidArgumentException("丟丟丟\n");
  }catch(InvalidArgumentException $e){
    echo $e->getMessage();
  }
}

function doSomethingForSomeone($someone){
  echo 'doSomethingForSomeone: '.$someone."\n";
}