<?php 
    require_once('config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prontuário Veterinário</title>
</head>
<body>
<section id="area-busca">
    <input type="text" placeholder="Informe nome do animal">
    <button>Buscar</button>

    <section id="resultados">

        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/brutus.png">
                <h1>Brutus</h1>
                <p>Bulldog</p>
            </a>
        </div>

        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/flocos.png">
                <h1>Flocos</h1>
                <p>Dálmata</p>
            </a>
        </div>

        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/luna.png">
                <h1>Luna</h1>
                <p>Tabby Listrado</p>
            </a>
        </div>

        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/meg.png">
                <h1>Meg</h1>
                <p>Beagle</p>
            </a>
        </div>

        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/rico.png">
                <h1>Rico</h1>
                <p>Californiano</p>
            </a>
        </div>

        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/tico.png">
                <h1>Tico</h1>
                <p>Fox Paulistinha</p>
            </a>
        </div>

    </section>
</section>
</body>
</html>