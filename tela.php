<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebidas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .bebida {
            margin-bottom: 20px;
        }
        .bebida input {
            display: block;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cadastro de Bebidas</h1>

        <form method="POST">
            <div class="bebida" id="vinho">
                <h2>Vinho</h2>
                <input type="text" name="vinhoNome" placeholder="Nome" required>
                <input type="text" name="vinhoTipo" placeholder="Tipo" required>
                <input type="number" name="vinhoAno" placeholder="Ano" required>
                <input type="number" name="vinhoPreco" placeholder="Preço" step="0.01" required>
                <button type="submit" name="cadastrarVinho">Cadastrar Vinho</button>
            </div>

            <div class="bebida" id="refrigerante">
                <h2>Refrigerante</h2>
                <input type="text" name="refrigeranteNome" placeholder="Nome" required>
                <input type="text" name="refrigeranteSabor" placeholder="Sabor" required>
                <input type="number" name="refrigerantePreco" placeholder="Preço" step="0.01" required>
                <button type="submit" name="cadastrarRefrigerante">Cadastrar Refrigerante</button>
            </div>

            <div class="bebida" id="suco">
                <h2>Suco</h2>
                <input type="text" name="sucoNome" placeholder="Nome" required>
                <input type="text" name="sucoFruta" placeholder="Fruta" required>
                <input type="number" name="sucoPreco" placeholder="Preço" step="0.01" required>
                <button type="submit" name="cadastrarSuco">Cadastrar Suco</button>
            </div>
        </form>

        <div>
    <h2>Resultados:</h2>
    <div>
        <?php
        include 'bebidas.php'; 

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['cadastrarVinho'])) {
                $vinho = new Vinho($_POST['vinhoNome'], $_POST['vinhoTipo'], $_POST['vinhoAno'], $_POST['vinhoPreco']);
                echo $vinho->mostrarBebida() . " | Preço menor que 25: " . ($vinho->verificarPreco($vinho->getPreco()) ? "Sim" : "Não") . "<br>";
            }

            if (isset($_POST['cadastrarRefrigerante'])) {
                $refrigerante = new Refrigerante($_POST['refrigeranteNome'], $_POST['refrigeranteSabor'], $_POST['refrigerantePreco']);
                echo $refrigerante->mostrarBebida() . " | Preço menor que 5: " . ($refrigerante->verificarPreco($refrigerante->getPreco()) ? "Sim" : "Não") . "<br>";
            }

            if (isset($_POST['cadastrarSuco'])) {
                $suco = new Suco($_POST['sucoNome'], $_POST['sucoFruta'], $_POST['sucoPreco']);
                echo $suco->mostrarBebida() . " | Preço menor que 2.5: " . ($suco->verificarPreco($suco->getPreco()) ? "Sim" : "Não") . "<br>";
            }
        }
        ?>
    </div>
</div>
    </div>
</body>
</html>
