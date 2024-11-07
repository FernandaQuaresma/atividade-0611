<?php
// Recuperando as preferências dos cookies ou usando valores padrão
$corFundo = isset($_COOKIE['corFundo']) ? $_COOKIE['corFundo'] : '#80deea';  // Cor padrão (azul suave)
$tamanhoFonte = isset($_COOKIE['tamanhoFonte']) ? $_COOKIE['tamanhoFonte'] : '16px';  // Tamanho padrão
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock in Rio - Personalize sua Experiência</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // Função para mudar a cor de fundo
        function mudarCor(cor) {
            document.body.style.backgroundColor = cor;
            // Criar ou atualizar o cookie de cor de fundo por 2 minutos
            const expires = new Date();
            expires.setMinutes(expires.getMinutes() + 2);
            document.cookie = "corFundo=" + cor + ";expires=" + expires.toUTCString() + ";path=/";
        }

        // Função para mudar o tamanho da fonte
        function mudarFonte(tamanho) {
            // Aplica o tamanho de fonte no corpo da página
            document.body.style.fontSize = tamanho;

            // Criar ou atualizar o cookie de tamanho de fonte por 2 minutos
            const expires = new Date();
            expires.setMinutes(expires.getMinutes() + 2);
            document.cookie = "tamanhoFonte=" + tamanho + ";expires=" + expires.toUTCString() + ";path=/";
        }
    </script>
</head>
<body style="background-color: <?php echo $corFundo; ?>; font-size: <?php echo $tamanhoFonte; ?>;">
    <header>
        <h1>🎸 Rock in Rio 2024 - Personalize Sua Experiência! 🎤</h1>
        <p>Escolha a sua cor de fundo e o tamanho da fonte para curtir o festival com o seu estilo!</p>
    </header>

    <main>
        <section class="personalizacao">
            <h2>Customize seu festival:</h2>
            <div class="opcoes">
                <div class="opcao">
                    <h3>Escolha sua cor de fundo:</h3>
                    <button class="cor-btn vermelho" onclick="mudarCor('#ff0000')">Vermelho</button>
                    <button class="cor-btn verde" onclick="mudarCor('#00ff00')">Verde</button>
                    <button class="cor-btn azul" onclick="mudarCor('#0000ff')">Azul</button>
                    <button class="cor-btn amarelo" onclick="mudarCor('#ffff00')">Amarelo</button>
                    <button class="cor-btn rosa" onclick="mudarCor('#ff00ff')">Rosa</button>
                </div>
                
                <div class="opcao">
                    <h3>Escolha o tamanho da fonte:</h3>
                    <button class="fonte-btn" onclick="mudarFonte('14px')">Pequena</button>
                    <button class="fonte-btn" onclick="mudarFonte('16px')">Normal</button>
                    <button class="fonte-btn" onclick="mudarFonte('20px')">Grande</button>
                    <button class="fonte-btn" onclick="mudarFonte('24px')">Muito Grande</button>
                </div>
            </div>
        </section>

        <section class="sobre-rockinrio">
            <h2>Sobre o Rock in Rio</h2>
            <p>O **Rock in Rio** é um dos maiores e mais icônicos festivais de música do mundo. Fundado em 1985, o evento é uma celebração de diversidade cultural e um encontro de milhões de fãs de música de todos os gêneros. Com edições em diversos países, o Rock in Rio é uma experiência única, repleta de grandes shows, atividades interativas e muita energia!</p>
            
            <div class="imagem-festival">
                <img src="img-rockinrio.jpg" alt="Rock in Rio Festival" />
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Rock in Rio | <a href="#">www.rockinrio.com.br</a></p>
    </footer>
</body>
</html>
