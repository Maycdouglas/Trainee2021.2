<!DOCTYPE html>
<html lang="pt-br">


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
    <script src="https://kit.fontawesome.com/c11bde093d.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../public/css/usuarios.css">
    <link rel="stylesheet" href="../../public/css/view-adm-produtos.css">
    <link rel="stylesheet" href="../../public/css/sidebar-adm.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>Admin Usuários</title>

</head>




<body>

    <!--Início da sidebar-->
    <div class="side-top-bars">
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
                                <div class="profile_name"><?= $_SESSION['nome']?></div>
                            </div>
                            <a href="/app/views/site/logout.php"><i class='fas fa-sign-out-alt'></i></a>
                        </div>
                    </li>
                </ul>
            </div>
            <section class="home-section">
                <div class="home-content navbar">
                    <i class='bx bx-menu'></i>
                </div>
            </section>
        </header>
    </div>
    <!--Fim da sidebar-->




    <main class="container principal">

    <div class="product-table">

<div class="container">

    <h3 class="text-center">Usuários MyCão</h3>

    <!--Espaço da barra de Pesquisa-->
        <div class="container-fluid d-flex justify-content-end">
            <!--Espaço do botão de Adicionar Produto-->
            <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end"> -->

            <!-- Button modal adicionar produto-->
            <button type="button" class="btn btn-success btn-adicionar mb-5" data-bs-toggle="modal" data-bs-target="#adicionar-modal">
                <img alt="Adicionar" src="../../public/assets/plus-icon.svg">Adicionar
            </button>

            <!-- </div> -->
            <!--Fim do espaço para o acréscimo de novos produtos-->
        </div>
</div>
<!--Fim do espaço da barra de Pesquisa-->

<hr>


<!--Tabela de Gerenciamento dos Produtos-->
<div class="container negrito">
    <table class="table table-hover justify-content-center align-items-center">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><b>Nome do Usuário</b></th>
                <th></th>
            </tr>
        </thead>



        <tbody>

            <!--Início da parte que será cópia para as outras-->

            <!--Continuação da Tabela apenas para visualização-->
            <?php foreach ($usuarios as $usuario) : ?>
                <tr class="container">
                    <th scope="row justify-content-center align-items-center"><?= $usuario->id ?></th>
                    <td class="justify-content-start name-itens-table"><?= $usuario->nome ?></td>
                    <div class="d-grid gap-2 d-md-block">
                        <td class="d-flex justify-content-end colum-bottons-table">

                            <!-- Button modal editar usuario -->
                            <button type="button" class="btn btn-primary bottom-options" data-bs-toggle="modal" data-bs-target="#editar-modal-<?= $usuario->id ?>">
                                <img alt="Editar" src="../../public/assets/bx_bxs-edit.svg">
                            </button>

                            <!-- Button modal visualizar usuario -->
                            <button type="button" class="btn btn-secondary bottom-options" data-bs-toggle="modal" data-bs-target="#detalhes-modal-<?= $usuario->id ?>">
                                <img alt="Visualizar" src="../../public/assets/akar-icons_eye.svg">
                            </button>

                            <!-- Button modal exclui usuario-->
                            <button type="button" class="btn btn-danger bottom-options" data-bs-toggle="modal" data-bs-target="#excluir-modal-<?= $usuario->id ?>">
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





            <!------------------------------------Modais---------------------------------------->

            <!--Início do modal Adicionar-->
            <div class="modal fade" id="adicionar-modal" tabindex="-1" aria-labelledby="adicionar usuario" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Adicionar Usuário</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/usuarios/create" method="POST" class="formulario">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nome do Usuário</label>
                                    <input name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Insira o nome completo">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Senha</label>
                                    <input name="senha" class="form-control" id="exampleFormControlInput1" placeholder="Insira sua senha" type="password">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-principal">Adicionar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Fim do modal adicionar-->




            <!--Início do modal Editar-->
            <?php foreach ($usuarios as $usuario) : ?>

                <div class="modal fade" id="editar-modal-<?= $usuario->id ?>" tabindex="-1" aria-labelledby="editar usuario" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar Usuário</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <form action="usuarios/update" method="POST" class="formulario">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nome do Usuário</label>
                                        <input name="nome" value="<?= $usuario->nome ?>" class="form-control" id="exampleFormControlInput1" placeholder="Insira o nome completo">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email</label>
                                        <input name="email" value="<?= $usuario->email ?>" type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Senha</label>
                                        <input name="senha" value="<?= $usuario->senha ?>" class="form-control" id="exampleFormControlInput1" placeholder="Insira sua senha" type="password">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                    <input type="hidden" value="<?= $usuario->id ?>" name="id">
                                    <button type="input" class="btn btn-principal">Editar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
            <!--Fim do modal editar-->




            <!--Início do modal Excluir-->
            <?php foreach ($usuarios as $usuario) : ?>

                <div class="modal fade" id="excluir-modal-<?= $usuario->id ?>" tabindex="-1" aria-labelledby="excluir usuario" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Excluir Usuário</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h2>Você tem certeza que quer excluir o seguinte usuário?</h2>
                                <br>
                                <h5>Nome:</h5>
                                <p><?= $usuario->nome ?></p>
                                <h5>Email:</h5>
                                <p><?= $usuario->email ?></p>
                                <h5>Senha:</h5>
                                <p><?= $usuario->senha ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-principal" data-bs-dismiss="modal">Cancelar</button>
                                <form action="usuarios/delete" method="POST">
                                    <input type="hidden" value="<?= $usuario->id ?>" name="id">
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
            <!--Fim do modal excluir-->




            <!--Início do modal Detalhes-->
            <?php foreach ($usuarios as $usuario) : ?>

                <div class="modal fade" id="detalhes-modal-<?= $usuario->id ?>" tabindex="-1" aria-labelledby="detalhar usuario" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Usuário</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5>Nome:</h5>
                                <p><?= $usuario->nome ?></p>
                                <h5>Email:</h5>
                                <p><?= $usuario->email ?></p>
                                <h5>Senha:</h5>
                                <p><?= $usuario->senha ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
            <!--Fim do modal detalhes-->

        </div>

    </main>




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