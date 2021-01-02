<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="TesteCores/style.css">
</head>
<body>
<div class="container" id="contCadastro">
    <div style="text-align: right">
    <a href="login.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
</div>
<h4>Cadastro de Usuário</h4>
<form action="insert_usuario.php" method="POST">
<div class="form-group">
<label>Nome do Usuário</label>
<input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Digite seu Nome Completo">
</div>

<div class="form-group">
<label>Senha</label>
<input type="password" name="senha" id="txtSenha" class="form-control" required autocomplete="off" placeholder="Digite sua Senha">
</div>

<div class="form-group">
<label>Confirma Senha</label>
<input type="password" name="confSenhausuario" class="form-control" required autocomplete="off" placeholder="Digite sua Senha Novamente" oninput="validaSenha(this)">
<small>Precisa ser igual a senha digitada acima.</small>
</div>

<div class="form-group">
<label>Nível de Acesso</label>
<select name="nivelusuario" class="form-control">
        <option value="1">Gerente</option>
        <option value="2">Líder</option>
        <option value="3">Funcionário</option>
</select>
</div>

<div style="text-align: right";>
<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
</div>

</form>

</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>
</body>
</html>