<?php

// reset
file_put_contents('./merge.txt', '');

$dir = __DIR__;
for ($i = 1 ; ; $i++) {
  $file = sprintf("%s/%d.txt", $dir, $i);
  if (!file_exists($file)) {
    break;
  }
  $content = trim(file_get_contents($file)) . "\n";
  file_put_contents('./merge.txt', $content, FILE_APPEND);
}
