<?php

// Define the base directory and site-specific modules directory.
$baseDir = __DIR__ . 'web/modules/contrib';
$siteDir = __DIR__ . 'web/sites/de/modules/contrib';

print_r($baseDir);exit;

// Ensure the site-specific directory exists.
if (!is_dir($siteDir)) {
    mkdir($siteDir, 0777, true);
}

// Check for installed modules in the contrib directory.
$modules = scandir($baseDir);

foreach ($modules as $module) {
    if ($module === '.' || $module === '..') {
        continue;
    }

    $sourcePath = "$baseDir/$module";
    $targetPath = "$siteDir/$module";

    if (is_dir($sourcePath)) {
        // Move the module directory to the site-specific location.
        rename($sourcePath, $targetPath);
        echo "Moved module: $module to $targetPath\n";
    }
}
