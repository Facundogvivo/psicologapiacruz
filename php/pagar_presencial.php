<?php
session_start();

include ("conexion.php");

if (!isset($_SESSION['reserva'])) {
    echo "<script> alert('No hay reserva para procesar.'); window.location='../reservaPresencial.php' </script>";
    exit;
}

require __DIR__ . '/../vendor/autoload.php';

// Configurar Mercado Pago
MercadoPago\SDK::setAccessToken('TEST-8124934877149287-071608-d699a1f38f3acd5871411a9d71a7d98a-96891356');

$reserva = $_SESSION['reserva'];

// Crear preferencia de pago
$preference = new MercadoPago\Preference();

// Crear un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Reserva Consulta Presencial';
$item->quantity = 1;
$item->unit_price = 1;
$preference->items = array($item);

// Crear URL de retorno
$preference->back_urls = array(
    "success" => "http://localhost/PiaCruz/php/pago_exitoso_presencial.php",
    "failure" => "http://localhost/PiaCruz/php/pago_fallido_presencial.php",
    "pending" => ""
);
$preference->auto_return = "approved";

// Guardar la preferencia
$preference->save();

// Redirigir al usuario a la página de pago de Mercado Pago
header('Location: ' . $preference->init_point);
exit;