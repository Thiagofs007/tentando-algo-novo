<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <title>Formulário</title>
</head>
<body style="<?php if(isset($_POST['nome'])){ echo 'background-color: lightcyan '; }?>">
<div>
    <form class="text-center" name="cadastro_dados" method="POST" action="">
    <h1 class="display-3">Cadastro de E-mail</h1><br><br>
    Email:<input type="text" name="nome" id="nome"><br><br>
    Senha:<input type="password" name="senha" id="senha"><br><br>
    <input type="submit" name="acao" id="" value="cadastrar" style="background-color: #0dcaf0">
<br><br>
<?php


    if(isset($_POST['nome'])){
        echo "<h1>" . $_POST['nome'] . "</h1>";
    }
?>
    </form>
</div>
</body>
</html>
