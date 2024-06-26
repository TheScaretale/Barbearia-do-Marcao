<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icones -->

    <link rel="stylesheet" href="Icones/fonts/style.css">


    <!-- Swiper -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Fontes -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Montserrat:wght@300;600;700&family=Roboto:ital,wght@0,400;1,900&display=swap"
        rel="stylesheet">

    <!--Nosso estilo-->
    <link rel="stylesheet" href="styles.css">
    <title>Barbearia do Marcão</title>
</head>

<body>

    <!-- Nav -->
    <header id="header" id="home">
        <a href="#" class="logoImg"><img src="Imagens/barbearia (1).png" alt=""></a>
        <a href="#" class="logo">Barbearia do <span>Marcão</span></a>
        <nav class="container"></nav>
        <!-- Menu -->
        <ul class="nav_links">
            <li><a href="#home">Inicio</a></li>
            <li><a href="#services">Serviços</a></li>
            <li><a href="#products">Produtos</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#contact">Contato</a></li>
            <li><a href="formulario.html">Adicionar Produtos</a></li>
        </ul>
        </nav>
    </header>

    <main>

        <!--HOME-->

        <section class="section" id="home">
            <div class="container">
                <img src="Imagens/fundo.jpg" alt="">
                <div class="row">
                    <div class="text h">
                        <h2>A melhor barbearia da região</h2>
                        <p>Aqui você será atendido com a melhor qualidade pelos melhores profissionais da região.</p>
                        <br><br>
                        <a href="#services" class="button">Ver serviços</a>
                    </div>
                </div>
            </div>
        </section>

        <!--SERVIÇOS-->
        <div class="divider-1"></div>
        <section class="section" id="services">
            <div class="container">
                <h1 class="titleAlt">Serviços</h1>
                <div class="cards grid">
                    <div class="card">
                        <div class="cardTitle">
                            <h3 class="text">Degrade</h3>
                        </div>
                        <img class="img" src="Imagens/cabelo1.jpeg" alt="">
                        <div class="cardText">
                            <p class="text">R$ 35,00</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cardTitle">
                            <h3 class="text">Americano</h3>
                        </div>
                        <img class="img" src="Imagens/cabelo3.jpeg" alt="">
                        <div class="cardText">
                            <p class="text">R$ 35,00</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cardTitle">
                            <h3 class="text">Mullet</h3>
                        </div>
                        <img class="img" src="Imagens/cabelo.jpg" alt="">
                        <div class="cardText">
                            <p class="text">R$ 35,00</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cardTitle">
                            <h3 class="text">Dread</h3>
                        </div>
                        <img class="img" src="Imagens/cabelo2.jpeg" alt="">
                        <div class="cardText">
                            <p class="text">R$ 70,00</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cardTitle">
                            <h3 class="text">Barba</h3>
                        </div>
                        <img class="img" src="Imagens/Barba.webp" alt="">
                        <div class="cardText">
                            <p class="text">R$ 15,00</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cardTitle">
                            <h3 class="text">Sobrancelha</h3>
                        </div>
                        <img class="img" src="Imagens/Sobrancelha.png" alt="">
                        <div class="cardText">
                            <p class="text">R$ 15,00</p>
                        </div>
                    </div>
                </div>
        </section>
        <div class="divider-2"></div>

        <!--PRODUTOS-->

        <section class="section" id="products">
            <div class="container">
                <h1 class="titleAlt">Produtos</h1>
                <center>
                    <h2 class="text">Confira nossa gama de produtos</h2><br><br>
                </center>

                <div class="cards grid">
                    <div class="card">
                        <div class="cardTitle1">
                            <h3 class="text">Kit de Barbear</h3>
                        </div>
                        <img src="Imagens/1.png" alt="">
                        <div class="cardText">
                            <p class="text">Contém um oleo para barba, uma loção e um creme</p><br>
                            <p class="text">R$ 30,00</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cardTitle">
                            <h3 class="text">2 Oleos para barba 140ml</h3>
                        </div>
                        <img src="Imagens/2.png" alt="">
                        <div class="cardText">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, officiis.</p>
                            <br>
                            <p class="text">R$ 25,90</p>
                        </div>

                    </div>
                    <div class="card">
                        <div class="cardTitle2">
                            <h3 class="text">Shampoo e Condicionador profissional</h3>
                        </div>
                        <img src="Imagens/3.png" alt="">
                        <div class="cardText">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, totam!
                            </p><br>
                            <p class="text">R$ 73,95</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cardTitle">
                            <h3 class="text">Shampoo e condicionador 1L</h3>
                        </div>
                        <img src="Imagens/4.png" alt="">
                        <div class="cardText">
                            <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In, suscipit.</p>
                            <br>
                            <p class="text">R$ 65,90</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cardTitle">
                            <h3 class="text">Pomada Modeladora 150g</h3>
                        </div>
                        <img src="Imagens/5.png" alt="">
                        <div class="cardText">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, temporibus.
                            </p><br>
                            <p class="text">R$ 20,00</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cardTitle2">
                            <h3 class="text">Kit com Pomada modeladora, gel e creme de barbear</h3>
                        </div>
                        <img src="Imagens/6.png" alt="">
                        <div class="cardText">
                            <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, nisi.</p>
                            <br>
                            <p class="text">R$ 89,99</p>
                        </div>
                    </div>
                    <?php
                    $servidor = "localhost";
                    $usuario = "root";
                    $senha = '';
                    $nomedb = "php";

                    $banco = new PDO("mysql:host={$servidor};dbname={$nomedb}", $usuario, $senha);
                    $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sql = "SELECT descricao,unidade,valor FROM produtos;";

                    $resultado = $banco->query($sql);

                    while($registro = $resultado->fetch()){
                        echo "<div class='card'>";
                        echo "<div class='cardTitle2'>";
                        echo "<h3 class='text'>".$registro["descricao"]." ".$registro["unidade"]."</h3>";
                        echo "</div>";
                        echo "<img src='Imagens/6.png' alt=''>";
                        echo "<div class='cardText'>";
                        echo "<p class='text'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, nisi.</p>";
                        echo "<br>";
                        echo "<p class='text'> R$".$registro["valor"]."</p>";
                        echo "</div>";
                        echo "</div>";
                    }
                    
                    ?>
                </div>
            </div>
        </section>

        <!--SOBRE-->
        <div class="divider-1"></div>
        <section class="section" id="about">
            <div class="container">
                <h1 class="titleAlt">Sobre</h1>
                <p class="text">A Barbearia do Marcão é um lugar onde você pode relaxar e cuidar da sua aparência.
                    <br>Com uma
                    equipe de profissionais experientes, a barbearia oferece serviços de corte de cabelo masculino,
                    barba e design de barba.<br>
                    Além disso, o ambiente é acolhedor e descontraído, perfeito para quem quer se sentir à vontade
                    enquanto cuidar da aparencia.
                </p>

            </div>
        </section>

        <!--CONTATOS-->

        <div class="divider-2"></div>
        <section class="section" id="contact">
            <div class="container">
                <table class="table">
                    <tr align="center">
                        <th class="title">Fale Conosco</th>
                        <th class="title">Endereço</th>
                        <th class="title">Horarios</th>
                    </tr>
                    <tr align="center">
                        <td class="text">Agende agora pelo WhatsApp</td>
                        <td class="text">Rua do Marcão 250, centro</td>
                        <td class="text">Segunda a Sexta 09h as 22h</td>
                    </tr>
                    <tr align="center">
                        <td class="text">(11) 99783-9153</td>
                        <td class="text">Bragança Paulista-SP</td>
                        <td class="text">Sabado das 09h as 20h</td>
                    </tr>
                    <tr align="center">
                        <td class="text">E-mail: contato@barbeariamarcao.com.br</td>
                        <td></td>
                        <td class="text">Domingo das 10h as 16h</td>
                    </tr>
                </table><br><br>
                <center>
                    <a class="button text"
                        href="https://api.whatsapp.com/send?phone=+5511958011744&text=Olá, gostaria de agendar um horário"
                        target="_blank"><i class="icon-whatsapp"></i>Entre em contato</a>
                </center>
            </div>
        </section>
        <div class="divider-1"></div>
    </main>

    <!-- Rodape -->

    <footer class="section">
        <div class="container-footer">
            <div class="brand">
                <a href="" id="home" class="logo logo-alt"> Barbearia do<span> Marcão</span></a>
                <p class="text">© 2023 Barbearia do Marcão</p>
                <p class="text">Todos os direitos reservados</p>
            </div>
        </div>
    </footer>
</body>

</html>