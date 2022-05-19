<?php
session_start();


require_once 'csv_fcs.php';
require_once 'db_fcs.php';
require_once 'db_config.php';

$conn = connect(HOST, USER, PASS, DB);

if(!$conn){
    header("Location: error.html");
}


$formData = [];

foreach ($_POST as $ItemName => $ItemValue) {
    $formData[$ItemName] = $ItemValue;
}

date_default_timezone_set('Europe/Tallinn');
$formData['kellaaeg'] = date('Y-m-d H:i:s', time());

// write data to db

$sql = 'INSERT into Tagasiside SET '
    .'Ettevote = "'.$formData['ettevottenimi'].'", '
    .'Kes_tegeleb = "'.$formData['kestegeleb'].'", '
    .'Voimekus = "'.$formData['voimekus'].'", '
    .'Valmidus = "'.$formData['valmidus'].'", '
    .'Huvitatus = "'.$formData['huvitatus'].'", '
    .'Mitu_noort = "'.$formData['mitunoort'].'", '
    .'Keda = "'.$formData['erialad'].'", '
    .'Email = "'.$formData['email'].'"';
    

$result = query($conn, $sql);


// write data to csv file if SQL query didn't fail


if($result){
    $file = "data.csv";

    $resultCSV = writeToCSV($file, $formData);
}


$pageCalledFrom = $_SERVER['HTTP_REFERER'];

if ($result && !empty($_SERVER['HTTP_REFERER'])){
    header("Location: ".$_SERVER['HTTP_REFERER']);
}elseif (!$result){
   header('Location: error.html');
}else{
    header('Location: index.php');
}
?>