
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Fafense</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Adicionando estilo para as caixas das imagens */
        .room-image {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }
        /* Adicionando estilo para as caixas dos quartos */
        .room-box {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        /* Estilo para o menu */
        header {
            background-color: #343a40; /* Cor de fundo */
            padding: 15px 0; /* Espaçamento interno */
            display: flex; /* Ativar layout flexível */
            justify-content: space-between; /* Alinhar itens ao longo do eixo principal */
            align-items: center; /* Alinhar itens ao longo do eixo transversal */
        }

        header h1 {
            color: #fff; /* Cor do texto */
            margin: 0; /* Remover margem */
            font-weight: bold; /* Deixar o texto mais gordo */
        }

        header nav ul {
            list-style-type: none; /* Remover marcadores de lista */
            padding: 0; /* Remover preenchimento */
            margin: 0; /* Remover margem */
            text-align: center; /* Alinhar à direita */
        }

        header nav ul li {
            display: inline; /* Exibir os itens na mesma linha */
            margin-left: 50px; /* Adicionar espaçamento entre os itens */
        }

        header nav ul li:first-child {
            margin-left: 0; /* Remover margem do primeiro item */
        }

        header nav ul li a {
            color: #fff; /* Cor do texto */
            text-decoration: none; /* Remover sublinhado */
            transition: color 0.3s; /* Transição suave */
        }

        header nav ul li a:hover {
            color: #f8f9fa; /* Cor do texto ao passar o mouse */
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <h1>Hotel Fafense</h1>
            <nav>
                <ul>
                <li><a href="index.php">Início</a></li>
                    <li><a href="about.php">Sobre</a></li>
                    <li><a href="contact.php">Contato</a></li>
                    <li><a href="criar_conta.php">Criar Conta</a></li> <!-- Botão Criar Conta -->
                    <li><a href="login.php">Login</a></li> <!-- Botão Login -->
                    
                    
                </ul>
            </nav>
        </div>
    </header>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="hotel.jpg" alt="Primeiro slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="hotel2.jpg" alt="Segundo slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="hotel3.jpg" alt="Terceiro slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

    <section id="hero">
        <div class="container">
            <h2>Bem-vindo ao Hotel Fafense</h2>
            <p>Desfrute de uma estadia luxuosa e confortável em nosso hotel. Oferecemos uma variedade de quartos e serviços para tornar sua viagem inesquecível.</p>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Os Nossos Melhores Quartos</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="room-box">
                        <div class="room">
                            <h3>Duplo Pequeno</h3>
                            <div class="room-image">
                                <img src="double_small.jpg" alt="Duplo Pequeno" class="img-fluid">
                            </div>
                            <p>Um espaço moderno, confortável e memorável. Escolha a melhor estadia com a maior QUALIDADE!</p>
                            <a href="criar_conta.php" class="btn btn-primary mt-3">Reserve Já</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="room-box">
                        <div class="room">
                            <h3>Duplo/Twin</h3>
                            <div class="room-image">
                                <img src="double_twin.jpg" alt="Duplo/Twin" class="img-fluid">
                            </div>
                            <p>Um espaço moderno, confortável e memorável. Escolha a melhor estadia com a maior QUALIDADE!</p>
                            <a href="criar_conta.php" class="btn btn-primary mt-3">Reserve Já</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="room-box">
                        <div class="room">
                            <h3>Triplo</h3>
                            <div class="room-image">
                                <img src="triple.jpg" alt="Triplo" class="img-fluid">
                            </div>
                            <p>Um espaço moderno, confortável e memorável. Escolha a melhor estadia com a maior QUALIDADE!</p>
                            <a href="criar_conta.php" class="btn btn-primary mt-3">Reserve Já</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="room-box">
                        <div class="room">
                            <h3>Master "Netflix" Suíte</h3>
                            <div class="room-image">
                                <img src="master.jpg" alt="MASTER NETFLIX SUÍTE"class="img-fluid">
                            </div>
                            <p>Um espaço moderno, confortável e memorável. Escolha a melhor estadia com a maior QUALIDADE!</p>
                            <a href="criar_conta.php" class="btn btn-primary mt-3">Reserve Já</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="room-box">
                        <div class="room">
                            <h3>Familiar Com Varanda</h3>
                            <div class="room-image">
                                <img src="familiar.jpg" alt="Triplo" class="img-fluid">
                            </div>
                            <p>Um espaço moderno, confortável e memorável. Escolha a melhor estadia com a maior QUALIDADE!</p>
                            <a href="criar_conta.php" class="btn btn-primary mt-3">Reserve Já</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="room-box">
                        <div class="room">
                            <h3>Standard</h3>
                            <div class="room-image">
                                <img src="standard.jpg" alt="Triplo" class="img-fluid">
                            </div>
                            <p>Um espaço moderno, confortável e memorável. Escolha a melhor estadia com a maior QUALIDADE!</p>
                            <a href="criar_conta.php" class="btn btn-primary mt-3">Reserve Já</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <p>&copy; 2024 Hotel Fafense Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php
    // Verificar se o usuário está logado (supondo que você tenha uma forma de verificar isso)
    
   
    ?>
</body>
</html>
