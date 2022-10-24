<h1>Editar Usuário</h1>
<?php 
  $sql = "SELECT * FROM usuarios WHERE id = ".$_GET['id'];
  $res = $conn->query($sql);
  $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php echo $row->id;?>">
  <div class="mb-3">
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control" value="<?php echo $row->nome;?>">
  </div>
  <div class="mb-3">
    <label for="email">E-mail</label>
    <input type="email" name="email" class="form-control" value="<?php echo $row->email;?>">
  </div>
  <div class="mb-3">
    <label for="senha">Senha</label>
    <input type="password" name="senha" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="senha">Data de Nascimento</label>
    <input type="date" name="data_nasc" class="form-control" value="<?php echo $row->data_nasc;?>">
  </div>
  <div class="mb-3">
    <button class="btn btn-primary">Enviar</button>
  </div>
</form>