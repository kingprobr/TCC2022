<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/home.css">
    <link rel="stylesheet" href="./styles/contato.css">
    <title>Hívena Del Pintor</title>
</head>

<body>
    <div class="nav-container">
        <nav class="navbar">
            <a class="navbar-logo" href="/src/index.php"><img src="./img/logo_branco.png" class="logo-img"></a>
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav-menu">
                <li><a href="./index.php" class="nav-links nav-text">Início</a></li>
                <li><a href="./sobre.php" class="nav-links nav-text">Sobre</a></li>
                <li><a href="./projetos.php" class="nav-links nav-text">Projetos</a></li>
                <li><a href="./contato.php" class="nav-links nav-text nav-links-btn">Contato</a></li>
            </ul>
        </nav>
    </div>
    <div class="contato-img-div">
        <div class="contato-img-gradient-effect"></div>
        <div class="contato-logo-div">
            <img src="./img/logo_branco.png" class="logo-sobre-img" alt="Logo">
        </div>
    </div>
    <script src="./js/navbar.js"></script>
    <div class="blank-div"></div>
    <div class="sobre-card-title-div">
        <p class="sobre-card-title1-p">Entre em contato conosco</p>
        <div class="blank-div"></div>
    </div>
    <div class="contato-form-grid">
        <!-- ↓ COLUNA 1 ↓ -->
        <div class="contato-card-img-div"><img src="./img/vertical5.jpg" alt="Imagem" class="contato-card-img"></div>
        <div class="contato-form-text">
            <div class="form-grid">
                <div class="nome-completo">
                    <form action="./php/add.php" method="post">
                    <div class="input-group">
                        <input required="" type="text" name="nome" id="nome" autocomplete="off" maxlength="50" class="input-name">
                        <label class="user-label">Nome Completo</label>
                    </div>
                </div>
                <div class="telefone">
                    <div class="input-group">
                        <input required="" type="text" name="tel" id="tel" autocomplete="off" maxlength="12" class="input-tel">
                        <label class="user-label">Telefone</label>
                    </div>
                </div>
                <div class="email">
                    <div class="input-group">
                        <input required="" type="text" name="email" id="email" autocomplete="off" maxlength="40" class="input-email">
                        <label class="user-label">E-mail</label>
                    </div>
                </div>
                <div class="mensagem">
                    <div class="input-group">
                        <textarea required="" type="text" name="msg" id="msg" autocomplete="off" maxlength="200" class="input-msg"></textarea>
                        <label class="user-label">Mensagem</label>
                    </div>
                </div>
                <div class="button">
                    <button>Enviar</button>
                </div>
            </div>
        </div>

    </div>
    </form>
    <script src="./js/input.js"></script>

    <br><br><br><br><br><br><br><br><br><br>


</body>

</html>