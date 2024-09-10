<?php

class FileUtility {
    // Method to write data to a file
    public static function writeToFile($filename, $data) {
        file_put_contents($filename, $data);
    }

    // Method to read data from a file
    public static function readFromFile($filename) {
        return file_get_contents($filename);
    }

    // Method to open a file and return its contents as an array
    public static function openFileAsArray($filename) {
        $content = self::readFromFile($filename);
        $lines = explode("\n", $content);
        return array_map('str_getcsv', $lines);
    }
}
?>
