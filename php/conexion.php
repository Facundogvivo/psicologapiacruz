<?php

$dbhost = "localhost";
$dbuser = "cfa98663";
$dbpass = "HSOkYskbkdaKjSYzJrrN";
$dbname = "cfa98663_bd_facundo";

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "bd_psicologa";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
	die("No hay conexion:" . mysqli_connect_error());
}


// creación de la conexión a la base de datos con mysql_connect()
$conexion = mysqli_connect($dbhost, $dbuser, $dbpass) or die("No se ha podido conectar al servidor de Base de datos");

// Selección del a base de datos a utilizar
$db = mysqli_select_db($conexion, $dbname) or die("Upps! Pues va a ser que no se ha podido conectar a la base de datos");
