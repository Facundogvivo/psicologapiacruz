<?php
session_start();

include ("conexion.php");

if (!isset($_SESSION['reserva'])) {
    echo "<script> alert('No hay reserva para procesar.'); window.location='../reservaPresencial.php' </script>";
    exit;
}

require __DIR__ . '/../vendor/autoload.php';

// Configurar Mercado Pago
MercadoPago\SDK::setAccessToken('APP_USR-170824455984482-072910-37da5030f41bd335c6bc6094f4642849-212984810');

$reserva = $_SESSION['reserva'];

// Crear preferencia de pago
$preference = new MercadoPago\Preference();

// Crear un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = $reserva['motivo'];
$item->quantity = 1;
$item->unit_price = $reserva['precio'];
$preference->items = array($item);

// Crear URL de retorno
$preference->back_urls = array(
    "success" => "https://www.psicologapiacruz.cl/php/pago_exitoso_presencial.php",
    "failure" => "https://www.psicologapiacruz.cl/php/pago_fallido_presencial.php",
    "pending" => ""
);
$preference->auto_return = "approved";

// Guardar la preferencia
$preference->save();

// Redirigir al usuario a la página de pago de Mercado Pago
header('Location: ' . $preference->init_point);
exit;