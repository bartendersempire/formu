<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Encomende nossos serviços</title>
    
    <!-- Fonte do Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Updock&display=swap" rel="stylesheet">

    












    <style>
        /* Ajuste para telas*/
        @media (max-width: 1085px) {
            html {
                font-size: 10px; 
            }
            button {
                font-size: 1.2rem; 
                padding: 10px 20px; 
                width: 90%; 
                max-width: 300px; 
            }
        }

        body {
            background-color: black;
            font-family: 'Times New Roman', serif;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .fixar {
            font-size: 7vh;
            color: rgb(223, 186, 0);
            font-family: "Updock", serif;
        }

        .conteudo {
            flex: 1;
            padding: 2vh;
        }

        button {
            cursor: pointer;
            background-color: rgb(255, 255, 255);
            color: black;
            border-radius: 1vh;
            font-weight: bold;
            margin: 2vh;
        }

        button:hover {
            opacity: 0.8;
        }
        
        .rodape2 {
            position: fixed;
            bottom: 0vh;
            width: 100%;
            padding: 1vh 0;
            text-align: center;
            right: 20%;
        }

        .rodape {
            position: fixed;
            bottom: 0vh;
            width: 100%;
            padding: 1vh 0;
            text-align: center;
            right: 35%;
        }

        .instagram-img {
            width: 4vh;
            height: 4vh;
            border-radius: 50%;
            margin-right: 3vh;
            vertical-align: middle;
        }

        .botao-instagram {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            background-color: white;
            color: black;
            padding: 2vh 3vh;
            border-radius: 1vh;
            font-weight: bold;
        }
        
        .bebidas2{
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            background-color: white;
            color: black;
            padding: 2vh 3vh;
            border-radius: 1vh;
            font-weight: bold;
        }

        .bebidas{
            position: absolute;
            right: 38%;
            top: 65%;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 1vh 0;
            text-align: center;
        }

        .botao-instagram:hover {
            opacity: 0.8;
        }

        .dados{
            width: 20%;
            height: 3vh;
        }

        .enviar{
            width: 7%;
            height: 5vh;
        }
    </style>
</head>

<body>

    <h1><b><i class="fixar">Tm Bartender</i></b></h1>

    <div class="conteudo">
        <h2>Informações Inseridas:</h2>
        <p id="informacoes"></p> <!-- Aqui será exibido o nome e o número -->
        <hr>
        <h2>Sobre nosso trabalho:</h2>
        <p>
            Nossa equipe trabalha como: bartender, ornamentações de festas. Oferecemos o melhor atendimento para que
            todos aproveitem ao máximo a festa, com uma decoração bem feita e drinks lindos e deliciosos! Trabalhamos
            em Virginópolis e região.
        </p>

        <p> Adicione alguns dados para entrarmos em contato.</p>

        <!-- Formulário para enviar os dados para o PHP -->
        <form action="conexão2.php" method="GET" >
            <input class="dados" type="text" id="nome" name="nome" placeholder="Seu nome" required>
            <input class="dados" type="number" id="numero" name="numero" placeholder="Seu WhatsApp" required>
            <button class="enviar" style="font-size: 105%;" type="submit">Enviar</button>
        </form>
        
    </div>

    <div class="rodape">
        <p>Caso queira entrar em contato conosco, basta acessar o link abaixo:</p>
        <a href="https://www.instagram.com/bartenders_empire?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="botao-instagram">
            <img src="unnamed.png" alt="Instagram" class="instagram-img"> Nosso Instagram
        </a>
    </div>

    <br>
    <div class="rodape2">
        <a href="https://api.whatsapp.com/send/?phone=553387031225&text=Ol%C3%A1%20gostaria%20de%20tirar%20algumas%20d%C3%BAvidas,%20voc%C3%AA%20est%C3%A1%20dispon%C3%ADvel?&type=phone_number&app_absent=0" class="botao-instagram">
            <img src="whatsapp.png" alt="Instagram" class="instagram-img"> Nosso WhatsApp
        </a>
    </div>

    <div class="bebidas">
        <a href="" class="bebidas2">
            <img src="bebida.png" alt="Instagram" class="instagram-img"> Cotratar nossos serviços de bartender's
        </a>
    </div>

</body>
</html>
 