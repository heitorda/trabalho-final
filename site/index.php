<?php
session_start(); // Continua a sessão

// Verifica se o usuário está logado
if (!isset($_SESSION['email'])) {
    // Se não estiver logado, redireciona para a página de login
    header("Location: login.html");
    exit();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fuu.com.br | a fumaça dos seus sonhos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


</head>
<body>
    <!-- começo do header -->
<header>
    <!-- logo da empresa -->
    <div id="logo"><a href="index.html"></a></div>
    <div id="infodousuario">
        <a href="carrinho.html">
            <i class="fas fa-shopping-cart"></i> Carrinho
        </a>
        
        <a href="cadastro.html">Login</a>
    </div>
</header>
<nav>
    <a href="index.html">
        <i class="fas fa-home"></i>
    </a>
    <a href="../site/sedas.html">Seda</a>
    <a href="../site/acesorios.html">Acessórios</a>
    <a href="Dichavadores.html">Dichavadores</a>
    <a href="../site/narquiles.html">Narquiles</a> 
</nav>

    <!-- fim do header  -->

    <!-- conteudo -->

    <!-- produto 1 -->
<div class="produtos">
    <div class="produto">
        <img src="../site/imagens/narquile 3.png" alt="narquile 3">
        <label for="qtde1">Quantidade:</label>
        <input type="number" id="qtde1" name="qtde1" min="1" max="20" value="1" />
        <p>Preço: R$130,00</p>
        <button onclick="addToCart('Produto 1', 130.00, document.querySelector('#qtde1').value)">Adicionar ao carrinho</button>
    </div>
    <!-- produto 2 -->
    <div class="produto">
        <img src="../site/imagens/narquile.jfif" alt="narquile">
        <h1>Produto 2</h1>
        <label for="qtde2">Quantidade:</label>
        <input type="number" id="qtde2" name="qtde2" min="1" max="20" value="1" />
        <p>Preço: R$155,00</p>
        <button onclick="addToCart('Produto 2', 155.00, document.querySelector('#qtde2').value)">Adicionar ao carrinho</button>
    </div>
    <!-- produto 3 -->
    <div class="produto">
        <img src="../site/imagens/narquile 2.png" alt="narquile 2">
        <h1>Produto 3</h1>
        <label for="qtde3">Quantidade:</label>
        <input type="number" id="qtde3" name="qtde3" min="1" max="20" value="1" />
        <p>Preço: R$199,99</p>
        <button onclick="addToCart('Produto 3', 199.99, document.querySelector('#qtde3').value)">Adicionar ao carrinho</button>
    </div>
    <!-- produto 4 -->
    <div class="produto">
        <img src="../site/imagens/seda.png" alt="seda">
        <h1>Produto 4</h1>
        <label for="qtde4">Quantidade:</label>
        <input type="number" id="qtde4" name="qtde4" min="1" max="20" value="1" />
        <p>Preço: R$30,00</p>
        <button onclick="addToCart('Produto 4', 30.00, document.querySelector('#qtde4').value)">Adicionar ao carrinho</button>
    </div>
    <!-- produto 5 -->
    <div class="produto">
        <img src="../site/imagens/seda 2.png" alt="seda 2">
        <h1>Produto 5</h1>
        <label for="qtde5">Quantidade:</label>
        <input type="number" id="qtde5" name="qtde5" min="1" max="20" value="1" />
        <p>Preço: R$32,00</p>
        <button onclick="addToCart('Produto 5', 32.00, document.querySelector('#qtde5').value)">Adicionar ao carrinho</button>
    </div>
    <!-- produto 6 -->
    <div class="produto">
        <img src="../site/imagens/seda 3.png" alt="seda 3">
        <h1>Produto 6</h1>
        <label for="qtde6">Quantidade:</label>
        <input type="number" id="qtde6" name="qtde6" min="1" max="20" value="1" />
        <p>Preço: R$34,99</p>
        <button onclick="addToCart('Produto 6', 34.99, document.querySelector('#qtde6').value)">Adicionar ao carrinho</button>
    </div>
</div>

<!-- asesorios daqui para baixo  -->

<!-- produto 1 -->
<div class="produtos">
    <div class="produto">
        <img src="../site/imagens/acesorio.webp" alt="narquile">
        <h1></h1>
        <label for="qtde7">Quantidade:</label>
        <input type="number" id="qtde7" name="qtde7" min="1" max="20" value="1" />
        <p>Preço: R$34,99</p>
        <button onclick="addToCart('Produto 7', 55.99, document.querySelector('#qtd0').value)">Adicionar ao carrinho</button>
    </div>
    <!-- produto 2 -->
    <div class="produto">
        <img src="../site/imagens/acesorio1.avif" alt="narquile">
      <h1></h1>
      <label for="qtde26">Quantidade:</label>
      <input type="number" id="qtde26" name="qtde26" min="1" max="20" value="1" />
        <p>preço: R$59,99</p>
        <button onclick="addToCart('produto 26', 60, document.querySelector('#qtde26').value)">adicionar ao carrinho</button>
    </div>
    <!-- produto 3 -->
    <div class="produto">
        <img src="../site/imagens/acesorio2.avif" alt="narquile">
        <h1></h1>
        <label for="qtde1">Quantidade:</label>
        <input type="number" id="qtde1" name="qtde1" min="1" max="20" value="1" />
        <p>preço: R$60,00</p>
        <button onclick="addtocart('produto 27', 60, document.querySelector('#qtde27').value)">adicionar ao carrinho</button>
    </div>
    <!-- produto 4 -->
    <div class="produto">
        <img src="../site/imagens/acesorio4.jpeg" alt="seda">
        <h1></h1>
        <label for="qtde1">Quantidade:</label>
        <input type="number" id="qtde1" name="qtde1" min="1" max="20" value="1" />
        <p>preço: R$49,99</p>
        <button onclick="addtocart('produto 28', 50, document.querySelector('#qtde28').value)">adicionar ao carrinho</button>
    </div>
    <!-- produto 5 -->
    <div class="produto">
        <img src="../site/imagens/acesorio5.jpeg" alt="">
        <h1></h1>
        <label for="qtde1">Quantidade:</label>
        <input type="number" id="qtde1" name="qtde1" min="1" max="20" value="1" />
        <p>preço: R$35,00</p>
        <button onclick="addtocart('produto 29', 35, document.querySelector('#qtde29').value)">adicionar ao carrinho</button>
    </div>
    <!-- produto 6 -->
    <div class="produto">
        <img src="../site/imagens/acesorio3.jpg" alt="">
        <h1></h1>
        <label for="qtde1">Quantidade:</label>
        <input type="number" id="qtde1" name="qtde1" min="1" max="20" value="1" />
        <p>preço: R$30,00</p>
        <button onclick="addtocart('produto 30', 30, document.querySelector('#qtde30').value)">adicionar ao carrinho</button>
    </div>
</div>

</script>


    <!-- começo do footer -->
     <footer>
        <div id="Contato">
            <h1>Contato</h1>
            <p>
                <ul>
                    <li>(81) 3323-1507</li>
                    <li>Fuustore@gmail.com</li>
                </ul>
            </p>
        </div>

        <div id="redesocial">
            <img src="data:image/png;base64,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" alt="">

        </div>
    </footer>
</body>
</html>