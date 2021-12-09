<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c11bde093d.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../public/css/usuarios.css">
    <link rel="stylesheet" href="../../public/css/sidebar-adm.css">
    <title>Admin - Usuários</title>
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
    <main class="container principal">
        <div class="main">
            <div class="header-container">
                <div class="title-section">
                    <img src="../../public/assets/options.svg" alt="Options">
                    <h3>Usuários</h3>
                </div>
                <button class="btn btn-outline btn-principal" type="submit" data-bs-toggle="modal" data-bs-target="#adicionar-modal"><img src="../../public/assets/plus-icon.svg" alt="plus">Adicionar</button>
            </div>
            <hr>
            <div class="tabela">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col" class="email">Email</th>
                            <th scope="col" class="senha">Senha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usuario) : ?>
                            <div class="modal fade" id="editar-modal-<?= $usuario->id ?>" tabindex="-1" aria-labelledby="editar usuario" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Editar Usuário</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="/usuarios/update" method="POST" class="formulario">
                                                <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Nome do Usuário</label>
                                                    <input type="hidden" value="<?= $usuario->nome ?>" name="nome">
                                                    <input class="form-control" id="exampleFormControlInput1" placeholder="Insira o nome completo">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Email</label>
                                                    <input type="hidden" value="<?= $usuario->email ?>" name="email">
                                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Senha</label>
                                                    <input type="hidden" value="<?= $usuario->senha ?>" name="senha">
                                                    <input class="form-control" id="exampleFormControlInput1" placeholder="Insira sua senha" type="password">
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
                            </div> <!-- modal-editar -->
                            <tr>
                                <th scope="row"><?= $usuario->id ?></th>
                                <td><?= $usuario->nome ?></td>
                                <td class="email"><?= $usuario->email ?></td>
                                <td class="senha"><?= $usuario->senha ?></td>
                                <td class="td-button">
                                    <div class="botoes">
                                        <button class="btn btn-primary"><img src="../../public/assets/bx_bxs-edit.svg" alt="Editar" data-bs-toggle="modal" data-bs-target="#editar-modal-<?= $usuario->id ?>"></button>
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#excluir-modal-<?= $usuario->id ?>"><img src="../../public/assets/bx_bx-trash.svg" alt="Excluir"></button><button class="btn btn-success detalhes" data-bs-toggle="modal" data-bs-target="#detalhes-modal"><img src="../../public/assets/akar-icons_eye.svg" alt="Detalhes"></button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div> <!-- tabela-usuarios -->


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
                                    <input class="form-control" id="exampleFormControlInput1" name="nome" placeholder="Insira o nome completo">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="nome@exemplo.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Senha</label>
                                    <input class="form-control" id="exampleFormControlInput1" name="senha" placeholder="Insira sua senha" type="password">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-principal">Adicionar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div><!-- modal-adicionar -->

            <div class="modal fade" id="detalhes-modal" tabindex="-1" aria-labelledby="detalhar usuario" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Usuário</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>Nome:</h5>
                            <p>Lucas de Oliveira Varino</p>
                            <h5>Email:</h5>
                            <p>lucasvarino@email.com</p>
                            <h5>Senha:</h5>
                            <p>1234546</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div> <!-- modal-detalhes -->


            <div class="modal fade" id="editar-modal-<?= $usuario->id ?>" tabindex="-1" aria-labelledby="editar usuario" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Editar Usuário</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/usuarios/update" method="POST" class="formulario">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nome do Usuário</label>
                                    <input type="hidden" value="<?= $usuario->nome ?>" name="nome">
                                    <input class="form-control" id="exampleFormControlInput1" placeholder="Insira o nome completo">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="hidden" value="<?= $usuario->email ?>" name="email">
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Senha</label>
                                    <input type="hidden" value="<?= $usuario->senha ?>" name="senha">
                                    <input class="form-control" id="exampleFormControlInput1" placeholder="Insira sua senha" type="password">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="input" class="btn btn-principal">Editar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div> <!-- modal-editar -->

            <div class="modal fade" id="excluir-modal-<?= $usuario->id ?>" tabindex="-1" aria-labelledby="excluir usuario" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Excluir Usuário</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h2>Você tem certeza que quer excluir o seguinte usuáiro?</h2>
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
                            <form action="/usuarios/delete" method="POST">
                                <input type="hidden" value="<?= $usuario->id ?>" name="id">
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- modal-excluir -->

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