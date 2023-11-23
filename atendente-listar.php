<h1>Listar Atendente</h1>

<?php

$sql = "SELECT * FROM atendente";
$res = $conn->query($sql);
$qtd = $res -> num_rows;

if($qtd > 0){
  print "<p>Encontrou <b>$qtd</b> resultados </p>";
  print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Atendente</th>";
		print "<th>Ações</th>";
		print "</tr>";
    while($row = $res -> fetch_object()){
      print "<tr>";
      print "<td>".$row->id_atendente."</td>";
			print "<td>".$row->nome_atendente."</td>";
			print "<td>
      <button onclick=\"location.href='?page=atendente-editar&id_atendente=".$row->id_atendente."';\" class='btn btn-success'>Editar</button>

      <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=atendente-salvar&acao=excluir&id_atendente=".$row->id_atendente."';}else{false;}\" class='btn btn-danger'>Excluir</button>
       </td>";
    }

  
}else{
  print "Não encontrou resultados";
}