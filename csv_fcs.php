<?php

function writeToCSV($file, $data) {
    if(isset($file) and is_file($file) and is_writable($file)){
        $fp = fopen($file, "a+");
        
        
        $row = implode("; ", $data);
        $row = rtrim($row, "; ");
        $row .= "\n";
        $result = fwrite($fp, $row);
        if(!$result){
            $_SESSION["teavitus"] = "Tekkis tõrge, palun täita vorm uuesti";
        }
        $_SESSION["teavitus"] = "Vastused on salvestatud!";
    } else {
        $_SESSION["teavitus"] = "Error: Probleem andmete salvestamisega";
    }
}