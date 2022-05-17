<?php
session_start();

require_once 'csv_fcs.php';
require_once 'db_fcs.php';
require_once 'db_config.php';

$conn = connect(HOST, USER, PASS, DB);


$firstColumn = "";

$formData = [];

foreach ($_POST as $ItemName => $ItemValue) {
    if($ItemName == "cnc-operaator" or $ItemName == "koostelukksepp" or $ItemName == "keevitaja"){
        if($ItemValue != ""){
            $firstColumn .= $ItemName . " ";
        }
    } elseif ($ItemName == "muueriala" && $ItemValue != "") {
        $firstColumn .= $ItemValue . " ";
    } elseif ($ItemValue == ""){
        $formData[$ItemName] = "puudub";
    } else {
        $formData[$ItemName] = $ItemValue;
    }
}

$formData['keda'] = $firstColumn;


// write data to db

$sql = 'INSERT into Tagasiside SET '
    .'Ettevote = "'.$formData['ettevottenimi'].'", '
    .'Kes_tegeleb = "'.$formData['kestegeleb'].'", '
    .'Voimekus = "'.$formData['voimekus'].'", '
    .'Valmidus = "'.$formData['valmidus'].'", '
    .'Huvitavus = "'.$formData['huvitatus'].'", '
    .'Mitu_noort = "'.$formData['mitunoort'].'", '
    .'Lisakysimused = "'.$formData['lisakysimused'].'", '
    .'Email = "'.$formData['email'].'", '
    .'Keda = "'.$formData['firstColumn'].'"';
    
    
$resultDB = query($conn, $sql);

    
// write data to csv file

$file = "data.csv";

$resultCSV = writeToCSV($file, $formData);

if ($resultCSV && $resultDB){
    $_SESSION['teavitus'] = 'Sinu vastused on salvestatud!';
} else {
    $_SESSION['teavitus'] = 'Tekkis tõrge, palun uuesti täita vorm ja saata!';
}

$pageCalledFrom = $_SERVER['HTTP_REFERER'];

if (!empty($_SERVER['HTTP_REFERER']))
    header("Location: ".$_SERVER['HTTP_REFERER']);
else
   echo "No referrer.";

?>