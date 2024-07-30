<?php
$b = test();
$ans = !empty($b) && is_iterable($b);
var_dump($ans);
exit(var_dump($b));

function test() {
  try{
    throw new InvalidArgumentException("丟丟丟\n");
  }catch (InvalidArgumentException $e){
    return [1];
  }
}