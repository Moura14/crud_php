<h1>Listar Empréstimo</h1>

<?php

$sql = "SELECT * FROM emprestimo";
$res = $conn->query($sql);
$qtd = $res -> num_rows;

if($qtd > 0){
  print "<p>Encontrou <b>$qtd</b> resultados </p>";
  print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
    print "<th>#</th>";
		print "<th>Data de empréstimo</th>";
		print "<th>Data de devolução</th>";
		print "</tr>";
    while($row = $res -> fetch_object()){
      print "<tr>";
      print "<td>".$row -> usuario_id_usuario."</td>";
      print "<td>".$row->data_emprestimo."</td>";
			print "<td>".$row->data_devolucao."</td>";
    }

  
}else{
  print "Não encontrou resultados";
}