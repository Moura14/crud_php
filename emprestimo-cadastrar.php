<h1>Cadastrar Empréstimo</h1>

<form action="?page=emprestimo-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
  <div class="mb-3">
		<label>Data de emprestimo</label>
		<input type="date" name="data_emprestimo" class="form-control">
	</div>
  <div class="mb-3">
		<label>Data de devolução</label>
		<input type="date" name="data_devolucao" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
		
	</div>
	
</form>