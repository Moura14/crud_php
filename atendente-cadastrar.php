<h1>Cadastrar Atendente</h1>					
<form action="?page=atendente-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_atendente" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF</label>
		<input type="text" name="cpf_atendente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Email</label>
		<input type="text" name="email_atendente" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
		
	</div>
	
</form>