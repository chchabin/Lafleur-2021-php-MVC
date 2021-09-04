<?php
// Indiquer le nom du fichier à journaliser
$logFile = "vues/v_connexion.php";
$fileSize = "92292";
//var_dump($_SERVER);

// Obtenir les informations CLF du visiteur du site
$host = $_SERVER['REMOTE_ADDR'];
$ident = $_SERVER['REMOTE_IDENT'] ?? "";
$auth = $_SERVER['REMOTE_USER'] ?? "";
$timeStamp = date("d/M/Y:H:i:s O");
$reqType = $_SERVER['REQUEST_METHOD'];
$servProtocol = $_SERVER['SERVER_PROTOCOL'];
$statusCode = "200";

// Ajouter des tirets aux variables vides (conformément aux spécifications)
if ($host == "") {
    $host = "-";
}
if ($ident == "") {
    $ident = "-";
}
if ($auth == "") {
    $auth = "-";
}
if ($reqType == "") {
    $reqType = "-";
}
if ($servProtocol == "") {
    $servProtocol = "-";
}

// Créer une chaîne au format CLF
$clfString = $host . " " . $ident . " " . $auth . " [" . $timeStamp . "] \"" . $reqType . " /" . $logFile . " " . $servProtocol . "\" " . $statusCode . " " . $fileSize . "\r\n";

// Obtenir le nom du fichier journal actuel en utilisant la date du jour
$logPath = "./log/";
$logFile = $logPath . "weblog-" . date("mdy") . ".log";

// Ouverture ou création du fichier journal
$fileWrite = fopen($logFile, "a+");

if (is_writable($logFile)) {

// Créer un verrou de fichier pour l'écriture
    flock($fileWrite, LOCK_EX);
// Écrire l'entrée CLF
    fwrite($fileWrite, $clfString);
// Libérer le verrou de fichier
    flock($fileWrite, LOCK_UN);
// Fermer le fichier journal
    fclose($fileWrite);
} else {
    echo "Le fichier $logFile n'est pas accessible en écriture.";
}