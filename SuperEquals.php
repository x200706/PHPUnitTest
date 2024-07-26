<?php
$zero_str = '0';
$six_str = '6';
$six_int = 6;

echo "\n!=的場合\n";
if ($six_str != 0) {
  echo '字串'.$six_str."不等於整數0\n";
}

if ($zero_str != 0) {
  echo '字串'.$zero_str."不等於整數0\n";
} else {
  echo '字串'.$zero_str."等於整數0\n";
}

echo "\n3個等於的場合\n";
if ($zero_str === 0) {
  echo '字串'.$zero_str."等同整數0\n";
} else {
  echo '字串'.$zero_str."不等同整數0\n";
}

if (!($zero_str === 0)) { // 同$zero_str !== 0；PHP跟Java不一樣是NOT運算子 !條件 才能正常生效，(!變數 比較運算子 比較對象)不會像Java自己轉換
  echo '字串'.$zero_str."不等同整數0\n";
} else {
  echo '字串'.$zero_str."等同整數0\n";
}