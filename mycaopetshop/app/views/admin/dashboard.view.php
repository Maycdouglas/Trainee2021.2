<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
simplesmente não fazer o login e digitar na barra de endereço do seu navegador
o caminho para a página principal do site (sistema), burlando assim a obrigação de
fazer um login, com isso se ele não estiver feito o login não será criado a session,
então ao verificar que a session não existe a página redireciona o mesmo
para a index.php.*/

    session_start();
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
        header('Location: /login');
    }

    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/styles.css">
    <link rel="stylesheet" href="../../public/css/sidebar-adm.css">
    <script src="https://kit.fontawesome.com/c11bde093d.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c11bde093d.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <title>Dashboard Administrativa</title>
</head>

<body>

    <header>
        <div class="sidebar close">
            <div class="logo-details">
                <img class="d-flex" src="../../public/assets/Icone com borda amarela.png">
                <span class="logo_name">MyCao</span>
            </div>
            <ul class="nav-links">
                <li>
                    <a href="/usuarios">
                        <i class='fas fa-users-cog'></i>
                        <span class="link_name">Usuários</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="/usuarios">Usuários</a></li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link">
                        <a href="view-adm-categorias.html">
                            <i class='fas fa-clipboard-list'></i>
                            <span class="link_name">Categorias</span>
                        </a>
                    </div>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="view-adm-categorias.html">Categorias</a></li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link">
                        <a href="view-adm-produtos.html">
                            <i class='fas fa-boxes'></i>
                            <span class="link_name">Produtos</span>
                        </a>
                    </div>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="view-adm-produtos.html">Produtos</a></li>
                    </ul>
                </li>


                <li>
                    <div class="profile-details">
                        <div class="profile-content">
                            <img class="d-flex" src="../../public/assets/Icone com borda azul claro.png">
                        </div>
                        <div class="name-job">
                            <div class="profile_name"><?= $_SESSION['nome']?></div>
                        </div>
                        <a href="/app/views/site/logout.php"><i class='fas fa-sign-out-alt'></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <section class="home-section">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
        </section>
    </header>

    <div class="container">

        <div class="welcome text-center mt-4">
            <h1 class="d-flex flex-column m-0">Seja bem-vindo(a), <span class="username"><?= $_SESSION['nome']?>!</span></h1>

            <div class="row mt-5 justify-content-center align-items-center">
                <div class="col-lg-4 col-sm-12 col-md-6 my-3 p-0">
                    <div class="card d-flex mx-auto" style="width: 15rem;">
                        <i class="icone-card fas fa-users-cog pt-4"></i>
                        <div class="card-body">
                            <h5 class="card-title pb-3">Gerenciar Usuários</h5>
                            <a href="/usuarios" class="botao-abrir btn btn-primary">Abrir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-6 my-3 p-0">
                    <div class="card d-flex mx-auto" style="width: 15rem;">
                        <i class="icone-card fas fa-clipboard-list pt-4"></i>
                        <div class="card-body">
                            <h5 class="card-title pb-3">Gerenciar Categorias</h5>
                            <a href="#" class="botao-abrir btn btn-primary">Abrir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-6 my-3 p-0">
                    <div class="card d-flex mx-auto" style="width: 15rem;">
                        <i class="icone-card fas fa-boxes pt-4"></i>
                        <div class="card-body">
                            <h5 class="card-title pb-3">Gerenciar Produtos</h5>
                            <a href="#" class="botao-abrir btn btn-primary">Abrir</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-sm-12 col-md-6 my-3 p-0">
                    <div class="card d-flex mx-auto" style="width: 15rem;">
                        <i class="icone-card fas fa-sign-out-alt pt-4"></i>
                        <div class="card-body">
                            <h5 class="card-title pb-3">Logout</h5>
                            <a href="/app/views/site/logout.php" class="botao-abrir btn btn-primary">Abrir</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>



    </div>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>
</body>

</html>