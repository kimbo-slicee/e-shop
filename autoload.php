<?php

spl_autoload_register(function ($class) {

// Convert namespace to file path
$class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

$file = __DIR__ . '/app/' . $class . '.php';

if (file_exists($file)) {
require $file;
}
});