<?php
spl_autoload_register(function ($className) {
    
    $namespacePrefix = 'App\\';
    $baseDir = __DIR__;
    

    if (strpos($className, $namespacePrefix) === 0) {
        $relativeClassName = substr($className, strlen($namespacePrefix));
        $classFile = str_replace('\\', '/', $relativeClassName) . '.php';
        $filePath = $baseDir . '/' . $classFile;
        if (file_exists($filePath)) {
            require_once $filePath;
        } else {
            $subdirectories = glob($baseDir . '/*', GLOB_ONLYDIR);
            foreach ($subdirectories as $subdirectory) {
                $subdirectoryFilePath = $subdirectory . '/' . $classFile;
                if (file_exists($subdirectoryFilePath)) {
                    require_once $subdirectoryFilePath;
                    break;
                }
            }
        }
    }
});
