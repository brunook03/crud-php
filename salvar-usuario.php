<?php
  switch ($_REQUEST['acao']) {
    case 'cadastrar':
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $data_nasc = $_POST['data_nasc'];

      $sql = "INSERT INTO usuarios (nome, email,senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
      $res = $conn->query($sql);
      if ($res == true){
        print "<script>
                alert('Cadastro realizado com sucesso!');
                location.href = '?page=listar';
              </script>";
      }else{
        print "<script>
                alert('Não foi possível realizar o cadastro!');
                location.href = '?page=novo';
              </script>";
      }
      break;
    case 'editar':
      $id = $_POST['id'];
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $data_nasc = $_POST['data_nasc'];
      $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}', data_nasc='{$data_nasc}' WHERE id=".$id;
      $res = $conn->query($sql);
      if ($res == true){
        print "<script>
                alert('Usuário editado com sucesso!');
                location.href = '?page=listar';
              </script>";
      }else{
        print "<script>
                alert('Não foi possível realizar a atulização do cadastro!');
                location.href = '?page=novo';
              </script>";
      }
      break;
    case 'excluir':
      $sql = "DELETE FROM usuarios WHERE id =".$_GET['id'];
      $res = $conn->query($sql);
      if ($res == true){
        print "<script>
                alert('Usuário excluído com sucesso!');
                location.href = '?page=listar';
              </script>";
      }else{
        print "<script>
                alert('Não foi possível realizar a exclusão do usuário!');
                location.href = '?page=novo';
              </script>";
      }
      break;
  }