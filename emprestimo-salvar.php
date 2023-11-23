<?php
switch ($_REQUEST['acao']) {
  case 'cadastrar':
    $sql = "INSERT INTO emprestimo (	
          data_emprestimo,
          data_devolucao
        ) VALUES (
          '".$_POST['data_emprestimo']."',
          '".$_POST['data_devolucao']."'
          
    )";

     $res = $conn -> query($sql);

      if($res==true){
        print "<script>alert('Cadastrou com sucesso!');</script>";
        print "<script>location.href='?page=emprestimo-listar';</script>";
      }else{
        print "<script>alert('Não foi possível');</script>";
        print "<script>location.href='?page=emprestimo-listar';</script>";
      }

    }
      
