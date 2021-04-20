<?php
function readFromFile($filename)
{
    $file = fopen($filename, "r+");

    $x = file_get_contents($filename);

    $temp = json_decode($x, true);
    fclose($file);
    return $temp;
}
function writeToFile($filename, $object) {
    $database = readFromFile($filename);

    $file = fopen($filename, "w+");
    if ($object) {
        array_push($database, $object);
    }

    $i = json_encode($database);

    fwrite($file, $i);
    fclose($file);
}

function writeDatabaseToFile($filename, $database) {

    $file = fopen($filename, "w+");

    $i = json_encode($database);

    fwrite($file, $i);
    fclose($file);   
}
?>