<?php
$connect = new PDO('mysql:host=localhost;dbname=pokemice;charset=utf8', 'root', 'pw');

$server_name = "MiniTF";

// Definir onde esta localizado os ratos no banco de dados e as respectivas colunas.
$table_users = "users";

$column_name = "name";
$column_first = "first";
$column_cheese = "cheese";
$column_normal_saves = "saves";
$column_hard_saves = "HardModeSaves";
$column_divine_saves = "DivineModeSaves";
$column_bootcamp = "bootcamp";

// Textos
$text_1 = "Ranking";
$text_2 = "El ranking siempre esta actualizado";
$text_3 = "Puesto";
$text_4 = "Nombre";
$text_5 = "First";
$text_6 = "Quesos Colectados";
$text_7 = "Ratones Salvados";
$text_8 = "Bootcamp";
?>
