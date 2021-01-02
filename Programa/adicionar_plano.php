<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container" style="margin-top:40px;width:500px">
<h4>Cadastro de Plano</h4>
<form action="_inserir_plano.php" method="POST">
    <div class="form-group">
        <input type="text" name="plano" class="form-control" placeholder="Digite o Nome do Plano">
</div>
<div style="text-align: right">
<button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
</div>
</form>
</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>