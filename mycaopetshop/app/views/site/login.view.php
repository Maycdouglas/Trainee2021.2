<!DOCTYPE html>
<html lang="en">

<head>
    <?php if (!isset($_SESSION)) {
        session_start();
    }
    if (isset($_SESSION['usuario'])) {

        header('Location: /dashboard');
    }
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/login.css">
    <link rel="stylesheet" href="../../public/css/navbarft.css">
    <script src="https://kit.fontawesome.com/c11bde093d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>Página de Login</title>
</head>

<body class="corpo-login justify-content-center align-content-center">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark shadow bg-blue">
            <div class="container">

                <a href="/home" class="d-flex align-items-center mb-0 text-decoration-none">
                    <img class="logo-navbar p-0 m-0" src="../../public/assets/Logo escrita.png">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-item nav-link links-navbar" href="/home">Home</a></li>
                        <li class="nav-item"><a class="nav-item nav-link links-navbar" href="/produtos">Produtos</a></li>
                        <li class="nav-item"><a class="nav-item nav-link links-navbar" href="/contato">Contato</a></li>
                        <li class="nav-item"><a class="nav-item nav-link links-navbar" href="/quemsomos">Quem Somos</a></li>
                        <li class="nav-item"><a class="nav-item nav-link links-navbar" href="/login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- <div class="container justify-content-center align-content-center">
        <div class="row justify-content-center align-content-center pt-0 m-0">
            <img class="logo-mycao-login" src="../../../public/assets/Logo com borda amarela.png" alt="logo-mycao-login">

        </div> -->

    <div class="container container-login-color justify-content-center align-content-center">

        <div class="card-form-login">
            <div class="row justify-content-center align-content-center">
                <div class="col-sm-6 col-md-6 col-lg-6 justify-content-center align-content-center ">

                    <div class="row justify-content-center align-items-center p-0 m-0">
                        <img class="logo-mycao-login justify-content-center align-content-center" src="../../../public/assets/Logo com borda amarela.png" alt="logo-mycao-login">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 ">
                    <form action="/logar" method="POST" class="formulario-login">

                        <div class="agrupamento-formulario form-group">
                            <label class="label-login" for="exampleDropdownFormEmail2">Endereço de E-mail:</label>
                            <input name="email" type="email" class="form-control form-control-login" id="exampleDropdownFormEmail2" placeholder="email@exemplo.com">
                        </div>
                        <div class="agrupamento-formulario form-group ">
                            <label class="label-login" for="exampleDropdownFormPassword2">Senha:</label>
                            <input name="senha" type="password" class="form-control form-control-login" id="exampleDropdownFormPassword2" placeholder="Senha">
                        </div>
                        <div class="botao-submit">
                            <button type="submit" class="botao-login btn">Acessar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
        if (isset($_SESSION['nao_autenticado'])) :
        ?>
            <div class="alert alert-danger mt-3 d-flex justify-content-center" role="alert">
                <h5>Dados incorretos! Preencha-os corretamente.</h5>
            </div>
        <?php
            unset($_SESSION['nao_autenticado']);
        endif;
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>