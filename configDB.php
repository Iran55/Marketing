<?php 
//configDB.php

//dados para escolha do DataBase (DB)
$dbhost = "localhost";
$dbuser = "root"; //Usuário Raiz (Rute)
$dbpass = "";
$dbname = "sistemaDeLogin";

//Conexão com o banco de dados
$conecta = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($conecta->connect_error){
    die("não foi possível conectar ao Banco de Dados: " . $conecta->connect_error);
}else{
    //echo "<h1>Conectou no BD Manowwwww!</h1>";
}