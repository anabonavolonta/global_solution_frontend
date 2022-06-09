<?php  
	require("../_config/connection.php");
    require("../dao/agricultor.php");
    $agricultorDAO = new Agricultor();
    $error = false;

    if(!$_GET || !$_GET["id"]){
        header('Location: index.php?message=Id do agricultor não informado!');
        die();
    }

    $idAgricultor = $_GET["id"];

    try {
        $result = $agricultorDAO->delete($idAgricultor);
    } catch (Exception $e) {
        $error = $e->getMessage();
    }

    $message = ($result && !$error) ? "Agricultor excluida com sucesso." : "Erro ao excluir a agricultor
    die()";