<?php
    class FileMng{
        public static $dir = "text";
        public static function readFromFile($filename) {
            $filepath = __DIR__ . "\\". self::$dir . "\\" .$filename;
            if (file_exists($filepath)) {
                return file_get_contents($filepath);
            } else {
                return "File not found";
            }
        }
        public static function writeToFile($filename, $content) {
            $filepath = __DIR__ . "\\". self::$dir . "\\" .$filename;
            $file = fopen($filepath, "a");
            fwrite($file, $content);
            fclose($file);
            return "Content written to file successfully";
        }
        public static function clearFile($filename) {
            $filepath = __DIR__ . "\\". self::$dir . "\\" .$filename;
            file_put_contents($filepath, "");
            return "File content cleared";
        }
    }
    echo FileMng::readFromFile("tx1.txt") . "\n";
    echo FileMng::writeToFile("tx1.txt", "\nAdditional text");
    echo FileMng::clearFile("tx1.txt"); 
?>