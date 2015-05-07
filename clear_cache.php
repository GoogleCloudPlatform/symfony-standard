<?php
// Copyright 2015 Google Inc. All Rights Reserved.
// Remove Symfony's cache folder recursively.
function rmtree($dir) {
  foreach (glob($dir . '/*') as $path) {
    if (is_dir($path)) {
      rmtree($path);
    } else {
      unlink($path);
    }
  }
  @rmdir($dir);
}

rmtree($_SERVER['CACHE_DIR']);

echo 'cache cleared';
