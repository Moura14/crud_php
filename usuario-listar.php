<h1>Listar Usuário</h1>

<?php


$sql = "SELECT * FROM usuario";
$res = $conn -> query($sql);
$qtd = $res -> num_rows;

if($qtd > 0){
  print "<p>Encontrou <b>$qtd</b> resultados </p>";
  print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Usuario</th>";
		print "<th>Ações</th>";
		print "</tr>";
    while($row = $res -> fetch_object()){
      print "<tr>";
      print "<td>".$row->id_usuario."</td>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>
      <button onclick=\"location.href='?page=usuario-editar&id_usuario=".$row->id_usuario."';\" class='btn btn-success'>Editar</button>

      <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=usuario-salvar&acao=excluir&id_usuario=".$row->id_usuario."';}else{false;}\" class='btn btn-danger'>Excluir</button>
       </td>";
    }

  
}else{
  print "Não encontrou resultados";
}