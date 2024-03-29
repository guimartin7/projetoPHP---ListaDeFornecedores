<?php
    require_once 'rota/init.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lista de fornecedores</title>
</head>
<body>
    <div class="escopo">
        <div class="base">
            <div class="pilar">
                <div class="menu">
                    <button class="solucoes">
                        <h1 class="Title">SOLUÇÕES</h1>
                    </button> 
                    <button class="precos">
                        <h1 class="Title">PREÇOS</h1>
                    </button>
                    <button class="nossa_plataforma">
                        <h1 class="Title">NOSSAS PLATAFORMAS</h1>
                    </button>
                    <button class="recursos">
                        <h1 class="Title">RECURSOS</h1>
                    </button>
                    <button class="seja_parceiro">
                        <h1 class="Title">SEJA UM PARCEIRO</h1>
                    </button>
                </div>
                <div style="text-align: right; background-color: black;">
                        <img src="IMG/logo.jpg" alt="Logo" style="width: 600px; height: 200px;">
                </div>
                <div class="col-md-12">
                    <p class="Title">Lista de Fornecedores</p>
                </div>
            </div>
            <p class="Textos"> Selecione uma das categorias abaixo:</p>
            <div class="conteudo">
                <div class="opcao">
                    <a href="<?= APP ?>auto.php" class="btn btn-primary">Automoveis</a>
                </div>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <div class="opcao">
                <a href="<?= APP ?>imobiliario.php" class="btn btn-primary">Imobiliario</a>
                </div>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <div class="opcao">
                <a href="<?= APP ?>alimentos_index.php" class="btn btn-primary">Alimentos</a>
                </div>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <div class="opcao">
                <a href="<?= APP ?>saude.php" class="btn btn-primary">Saúde</a>
                </div>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <div class="opcao">
                <a href="<?= APP ?>dropshipping.php" class="btn btn-primary">Dropshipping</a>
                </div>
            </div>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </div>
    </div>
</body>
</html>