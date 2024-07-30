<?php
$b = test();
exit(var_dump($b));

function test() {
  try{
    throw new InvalidArgumentException("丟丟丟\n");
  }catch (InvalidArgumentException $e){
    print("Huh?\n");
  }
  return 'test'; // 答案是依然會return
}