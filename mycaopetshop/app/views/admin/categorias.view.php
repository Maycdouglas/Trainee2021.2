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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c11bde093d.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin Categorias</title>
    <link rel="stylesheet" href="../../public/css/view-adm-categorias.css">
    <link rel="stylesheet" href="../../public/css/view-adm-produtos.css">
    <link rel="stylesheet" href="../../public/css/sidebar-adm.css">
    <link rel="stylesheet" href="../../public/css/usuarios.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

</head>


<body class="corpo-adm-categoria">
    <header class="cabeca-pagina">
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
                        <a href="/categorias">
                            <i class='fas fa-clipboard-list'></i>
                            <span class="link_name">Categorias</span>
                        </a>
                    </div>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="/categorias">Categorias</a></li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link">
                        <a href="/admin/produtos">
                            <i class='fas fa-boxes'></i>
                            <span class="link_name">Produtos</span>
                        </a>
                    </div>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="/admin/produtos">Produtos</a></li>
                    </ul>
                </li>


                <li>
                    <div class="profile-details">
                        <div class="profile-content">
                            <img class="d-flex" src="../../public/assets/Icone com borda azul claro.png">
                        </div>
                        <div class="name-job">
                            <div class="profile_name"><?= $_SESSION['nome'] ?></div>
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


    <main class="container principal">
    <div class="product-table">

        <div class="container">

            <h3 class="text-center">Categorias MyCão</h3>

            <!--Espaço da barra de Pesquisa-->
            <nav class="navbar navbar-light bg-light nav-search">
                <div class="container-fluid bottom-add d-flex">
                    <form class="d-flex justify-content-end bar-search" method="get" action="/categorias/result">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search" name="pesquisa">
                        <button class="btn btn-primary bottom-search" type="submit">Pesquisar</button>
                    </form>
                    <!--Espaço do botão de Adicionar Produto-->
                    <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end"> -->

                    <!-- Button modal adicionar produto-->
                    <button type="button" class="btn btn-success btn-adicionar" data-bs-toggle="modal" data-bs-target="#adicionar-modal">
                        <img alt="Adicionar" src="../../public/assets/plus-icon.svg">Adicionar
                    </button>

                    <!-- </div> -->
                    <!--Fim do espaço para o acréscimo de novos produtos-->
                </div>
            </nav>
        </div>
        <!--Fim do espaço da barra de Pesquisa-->

        <hr>


        <!--Tabela de Gerenciamento dos Produtos-->
        <div class="container negrito">
            <table class="table table-hover justify-content-center align-items-center">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"><b>Nome da Categoria</b></th>
                        <th></th>
                    </tr>
                </thead>



                <tbody>

                    <!--Início da parte que será cópia para as outras-->

                    <!--Continuação da Tabela apenas para visualização-->
                    <?php foreach ($categorias as $categoria) : ?>
                        <tr class="container">
                            <th scope="row justify-content-center align-items-center"><?= $categoria->id ?></th>
                            <td class="justify-content-start name-itens-table"><?= $categoria->nome ?></td>
                            <div class="d-grid gap-2 d-md-block">
                                <td class="d-flex justify-content-end colum-bottons-table">

                                    <!-- Button modal editar categoria -->
                                    <button type="button" class="btn btn-primary bottom-options" data-bs-toggle="modal" data-bs-target="#editar-modal-<?= $categoria->id ?>">
                                        <img alt="Editar" src="../../public/assets/bx_bxs-edit.svg">
                                    </button>

                                    <!-- Button modal visualizar categoria -->
                                    <button type="button" class="btn btn-secondary bottom-options" data-bs-toggle="modal" data-bs-target="#visualiza-modal-<?= $categoria->id ?>">
                                        <img alt="Visualizar" src="../../public/assets/akar-icons_eye.svg">
                                    </button>

                                    <!-- Button modal exclui categoria-->
                                    <button type="button" class="btn btn-danger bottom-options" data-bs-toggle="modal" data-bs-target="#excluir-modal-<?= $categoria->id ?>">
                                        <img alt="Excluir" src="../../public/assets/bx_bx-trash.svg">
                                    </button>
                                </td>

                            </div>
                        </tr>

                    <?php endforeach; ?>



                </tbody>
            </table>
        </div>
        <!--Fim da Tabela de Produtos-->

    </div>


    <!-- Botao-adicionar -->
    <div class="modal fade" id="adicionar-modal" tabindex="-1" aria-labelledby="adicionar categoria" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="formulario-adm-categoria" action="categorias/create" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome da Categoria</label>
                            <input class="form-control" id="exampleFormControlInput1" placeholder="Insira o nome da Categoria" name="nome">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-principal">Adicionar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Botao-editar -->
    <?php foreach ($categorias as $categoria) : ?>
        <div class="modal fade" id="editar-modal-<?= $categoria->id ?>" tabindex="-1" aria-labelledby="editar categoria" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="formulario-adm-categoria" action="categorias/edit" method="post">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome da Categoria</label>
                                <input class="form-control" id="exampleFormControlInput1" value="<?= $categoria->nome ?>" name="nome">
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" value="<?= $categoria->id ?>" name="id">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-principal">Editar</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- Botao-excluir -->
    <?php foreach ($categorias as $categoria) : ?>
        <div class="modal fade" id="excluir-modal-<?= $categoria->id ?>" tabindex="-1" aria-labelledby="excluir categoria" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Excluir Categoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h2>Deseja excluir a categoria?</h2>
                        <br>
                        <h5>Nome:</h5>
                        <p><?= $categoria->nome ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-principal" data-bs-dismiss="modal">Cancelar</button>
                        <form action="categorias/delete" method="post">
                            <input type="hidden" value="<?= $categoria->id ?>" name="id">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

    <!-- Botao-visualizar -->

    <?php foreach ($categorias as $categoria) : ?>


        <div class="modal fade" id="visualiza-modal-<?= $categoria->id ?>" tabindex="-1" aria-labelledby="visualizar categoria" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Categoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>Nome:</h5>
                        <p><?= $categoria->nome ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>



    </main>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
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