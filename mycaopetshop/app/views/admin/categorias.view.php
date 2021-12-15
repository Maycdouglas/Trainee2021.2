<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c11bde093d.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Visão Administrativa das categorias</title>
    <link rel="stylesheet" href="../../public/css/view-adm-categorias.css">
    <link rel="stylesheet" href="../../public/css/usuarios.css">
    <link rel="stylesheet" href="../../public/css/sidebar-adm.css">

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
                    <a href="usuarios.html">
                        <i class='fas fa-users-cog'></i>
                        <span class="link_name">Usuários</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="usuarios.html">Usuários</a></li>
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
                            <div class="profile_name">Usuário</div>
                        </div>
                        <i class='fas fa-sign-out-alt'></i>
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

    <main class="container container-principal-categoria justify-content-center align-content-center mt-5">
        <div class="main-cat-adm">

            <div class=" row container-cabeca p-0 m-0">

                <h3 class="titulo-adm-categoria text-center">Categorias</h3>
                <div class="pesquisa-container">
                    <div class="row justify-content-end">
                        <form class="d-flex justify-content-end" action="/categorias/result" method="get">
                            <input class="form-control barra-pesquisa me-2" type="search" placeholder="Pesquisar..." aria-label="Search" name="pesquisa">
                            <button type="submit" class="btn btn-primary btn-sm">Pesquisar</button>
                        </form>
                    </div>

                    <button class="btn btn-outline btn-success botao-de-adicionar" type="submit" data-bs-toggle="modal" data-bs-target="#adicionar-modal"><img src="../../public/assets/plus-icon.svg" alt="plus">Adicionar</button>
                </div>
            </div>
            <hr>
            <div class="container-corpo">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome da categoria</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categorias as $categoria) : ?>
                            <tr>
                                <th scope="row"><?= $categoria->id ?></th>
                                <td><?= $categoria->nome ?></td>

                                <td class="d-flex td-botoes-categoria justify-content-end">
                                    <div class="botoes-categoria justify-content-end">
                                        <button class="btn btn-primary botoes-categorias" data-bs-toggle="modal" data-bs-target="#editar-modal-<?= $categoria->id ?>"><img src="../../public/assets/bx_bxs-edit.svg"></button>
                                        <button class="btn btn-secondary botoes-categorias" data-bs-toggle="modal" data-bs-target="#visualiza-modal-<?= $categoria->id ?>"><img src="../../public/assets/akar-icons_eye.svg"></button>
                                        <button class="btn btn-danger botoes-categorias" data-bs-toggle="modal" data-bs-target="#excluir-modal-<?= $categoria->id ?>"><img src="../../public/assets/bx_bx-trash.svg"></button>
                                    </div>
                                </td>




                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
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
                            <form class="formulario-adm-categoria" action="/categorias/create" method="post">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nome da Categoria</label>
                                    <input class="form-control" id="exampleFormControlInput1" placeholder="Insira o nome da Categoria" name="nome">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-principal" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success">Adicionar</button>
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
                                <form class="formulario-adm-categoria" action="/categorias/edit" method="post">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nome da Categoria</label>
                                        <input class="form-control" id="exampleFormControlInput1" value="<?= $categoria->nome ?>" name="nome">
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" value="<?= $categoria->id ?>" name="id">
                                    <button type="button" class="btn btn-principal" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-success">Editar</button>
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
                                <form action="/categorias/delete" method="post">
                                    <input type="hidden" value="<?= $categoria->id ?>" name="id">
                                    <button type="button" class="btn btn-principal" data-bs-dismiss="modal">Cancelar</button>
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
                                <button type="button" class="btn btn-principal" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>


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