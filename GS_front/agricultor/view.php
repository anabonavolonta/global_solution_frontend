<?php require "../_helpers/index.php";
echo siteHeader("Ver Agricultor");
require("../_config/connection.php");

require("../dao/agricultor.php");

$agricultorDAO = new Agricultor();

$agricultor= false;
$error = false;

if (!$_GET || !$_GET["id"]) {
    header('Location: index.php?message=Id do Agricultor não informado!');
    die();
}

$idAgricultor = $_GET["id"];

try {
    $agricultor = $agricultorDAO->getById($idAgricultor);
} catch (Exception $e) {
    echo "Id: ".$idAgricultor."<br>";
    $error = $e->getMessage();
}

if (!$agricultor || $error) {
    header('Location: index.php?message=Erro ao recuperar dados do agricultor!');
    die();
}


?>


    <section class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="col">
                <h1>Visualizar Agricultor</h1>
            </div>
        </div>

        <div class="mb-3">
            <h3>Agricultor</h3>
            <p><?= $nomeAgricultor["nomeAgricultor"] ?></p>
        </div>
        
        <div class="mb-3">
            <h3>CNPJ</h3>
            <p><?= $cnpj["cnpj"] ?></p>
        </div>
        <a href="index.php" class="btn btn-primary">Voltar</a>
    </section>

<?php require "../_partials/footer.php"; ?>