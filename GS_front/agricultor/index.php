<?php require "../_helpers/index.php";
echo siteHeader("Gerenciar Agricultores");
require("../_config/connection.php");
require("../dao/agricultor.php");


$message = false;
if ($_GET && $_GET["message"]) {
	$message = $_GET["message"];
}
$agricultor = new Agricultor();
?>
<section class="container mt-5 mb-5">

	<?php if ($message) : ?>
		<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<?= $message ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php endif; ?>

	<div class="row mb-3">
		<div class="col">
			<h1>Agricultores</h1>
		</div>
		<div class="col d-flex justify-content-end align-items-center">
			<a class="btn btn-success" href="add.php">Adicionar</a>
		</div>
	</div>

	<table class="table table-striped table-bordered text-center">
		<thead class="table-dark">
			<tr>
				<th>ID</th>
				<th>Agricultor</th>
				<th>Cnpj</th>				
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($agricultor->getAll() AS $agricultor) : ?>
				<tr>
					<td>
						<?= "#".$agricultor->id?>
					</td>
					
					<td>
						<?= $agricultor->$nomeAgricultor ?>
					</td>
					
					<td>
						<?= $agricultor->cnpj ?>
					</td>					
					<td>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-outline-primary" onclick="confirmDelete(<?= $agricultor->id ?>)">
								Excluir
							</button>
							<a href="edit.php?id=<?= $agricultor->id ?>" class="btn btn-outline-primary">
								Editar
							</a>
							<a href="view.php?id=<?= $agricultor->id ?>" class="btn btn-outline-primary">
								Ver
							</a>
						</div>
					</td>
				</tr>

			<?php endforeach; ?>
		</tbody>
		<tfooter class="table-dark">
			<tr>
				<th>ID</th>
				<th>Agricultor</th>
				<th>Cnpj</th>				
				<th>Ações</th>
			</tr>
		</tfooter>
	</table>
</section>

<script>
	const confirmDelete = (idagricultor) => {
		const response = confirm("Deseja realmente excluir o agricultor?")
		if (response) {
			window.location.href = "delete.php?id=" + idEmrpesa
		}
	}
</script>

<?php require("../_partials/footer.php"); ?>