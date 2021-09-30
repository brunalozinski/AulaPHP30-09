<?php

// PARAMETROS DE CONEXÃO MYSQL
// 1 - host -> onde o banco de dados está rodando
// 2 - host -> usuario do banco de dados
// 3 - password -> senha do usuario do banco de dados
// 4 - dataBase -> nome do banco de dados 

const HOST = 'localhost';
const USER = 'root';
const PASSWORD = 'bcd127';
const DATABASE = 'icatalogo';

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if ($conexao === false) {
    die (mysqli_connect_error());
}

// echo '<pre>';
// var_dump($conexao);
// echo '</pre>';

?>