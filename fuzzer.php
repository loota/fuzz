<?php
function fuzz() {
  $length = rand(0, 1000);
  return
    substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
      ceil($length/strlen($x)) )),1,$length);
}

function doFoo(string $string) {
  assert(mb_strlen($string) < 10000);
  if (mb_strlen($string) < 900) {
    return 1;
  }
  return 0;
}
