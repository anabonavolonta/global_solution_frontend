<?php require "../_helpers/index.php";
echo siteHeader("Adicionar Agricultor");
require("../_config/connection.php");
require("../dao/agricultor.php");

$agricultorDAO = new Agricultor();

$result = false;
$error = false;
if ($_POST) {
    try {
        $nomeAgricultor = $_POST["p_nomeAgricultor"];
        $idade = $_POST["p_idade"];
        $cnpj = $_POST["p_cnpj"];
        $fazenda = $_POST["p_fazenda"];
        
        $result = $agricultorDAO->insert( $nomeAgricultor, $idade,  $cnpj, $fazenda);
         if ($result) {
            header('Location: index.php?message=Agricultor cadastrado com sucesso!');
            die();
        } 
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

?>

<section class="container mt-5 mb-5">

    <?php if ($_POST && (!$result || $error)) : ?>
        <p>
            Erro ao cadastrar agricultor.
            <?= $error ? $error : "Erro desconhecido." ?>
        </p>
    <?php endif; ?>

    <div class="row mb-3">
        <div class="col">
            <h1>Cadastrar Agricultor</h1>
        </div>
    </div>

    <form action="" method="post">
        <div class="row">

           
        </div>
        <div class="row mb-3">
            <div class="col-9">
                <label for="p_nomeAgricultor" class="form-label">Nome</label>
                <input type="text" class="form-control" id="p_nomeAgricultor" name="p_nomeAgricultor" />
            </div>
            <div class="col-3">
                <label for="p_idade" class="form-label">Idade</label>
                <input type="text" class="form-control" id="p_idade" name="p_idade" />
            </div>
            <div class="col-3">
                <label for="p_cnpj" class="form-label">CNPJ</label>
                <input type="text" class="form-control" id="p_cnpj" name="p_cnpj" />
            </div>
            <div class="col-3">
                <label for="p_fazenda" class="form-label">Fazenda</label>
                <input type="text" class="form-control" id="p_fazenda" name="p_fazenda" />
            </div>
        </div>
        
        
        <div class="row">
            <div class="col">
                <a href="index.php" class="btn btn-light">Cancelar</a>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>

    </form>
</section>



<?php require "../_partials/footer.php"; ?>