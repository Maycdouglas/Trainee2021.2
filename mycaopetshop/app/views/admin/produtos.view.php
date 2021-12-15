<!DOCTYPE html>

<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View ADM Produtos</title>
  <script src="https://kit.fontawesome.com/c11bde093d.js" crossorigin="anonymous"></script>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../public/css/view-adm-produtos.css">
  <link rel="stylesheet" href="../../public/css/sidebar-adm.css">
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

  <div class="container product-table">

    <div class="container">

      <h2 class="text-center">Produtos MyCão</h2>

      <!--Espaço da barra de Pesquisa-->
      <nav class="navbar navbar-light bg-light nav-search">
        <div class="container-fluid bottom-add d-flex">
              <form class="d-flex justify-content-end bar-search" method="get" action="/admin/produtos/result">
            <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search" name="pesquisa">
            <button class="btn btn-primary bottom-search" type="submit">Pesquisar</button>
          </form>
          <!--Espaço do botão de Adicionar Produto-->
          <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end"> -->

          <!-- Button modal adicionar produto-->
          <button type="button" class="btn btn-success btn-adicionar" data-bs-toggle="modal"
            data-bs-target="#AddProdut">
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
    <div class="container">
      <table class="table table-hover justify-content-center align-items-center">

        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col"><b>Nome do Produto</b></th>
            <th></th>
          </tr>
        </thead>



        <tbody>

          <!--Início da parte que será cópia para as outras-->

          <!--Continuação da Tabela apenas para visualização-->
          <?php foreach ($produtos as $produto) :?>
              <tr class="container">
                  <th scope="row justify-content-center align-items-center"><?= $produto->id ?></th>
                  <td class="justify-content-start name-itens-table"><?= $produto->nome ?></td>
                  <div class="d-grid gap-2 d-md-block">
                      <td class="d-flex justify-content-end colum-bottons-table">

                          <!-- Button modal editar produto -->
                          <button type="button" class="btn btn-primary bottom-options" data-bs-toggle="modal"
                                  data-bs-target="#EditarProd-<?= $produto->id ?>">
                              <img alt="Editar" src="../../public/assets/bx_bxs-edit.svg">
                          </button>

                          <!-- Button modal visualizar produto -->
                          <button type="button" class="btn btn-secondary bottom-options" data-bs-toggle="modal"
                                  data-bs-target="#VisualizarProd-<?= $produto->id ?>">
                              <img alt="Visualizar" src="../../public/assets/akar-icons_eye.svg">
                          </button>

                          <!-- Button modal exclui produto-->
                          <button type="button" class="btn btn-danger bottom-options" data-bs-toggle="modal"
                                  data-bs-target="#ExcluiProd-<?= $produto->id ?>">
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








  <!---------------------------------------Modais----------------------------------------------->

  <!-- Modal Adicionar Produto -->
  <div class="modal fade" id="AddProdut" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Adicionar Produto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form action="produtos/create" method="post" class="row g-3">
            <div class="col-md-8">
              <label for="inputNameAddProdut" class="form-label">Nome</label>
              <input type="text" name="nome" class="form-control" id="inputNameAddProdut" placeholder="Insira o nome do produto">
            </div>
            <div class="col-md-4">
              <label for="inputPrecoAddProdut" class="form-label">Preço</label>
              <input type="text" name="preco" class="form-control" id="inputPrecoAddProdut" placeholder="R$99,99">
            </div>
            <div class="col-12">
              <label for="inputDescritionAddProdut" class="form-label">Descrição do Produto</label>
              <textarea class="form-control" name="descricao" id="inputDescritionAddProdut" rows="3"
                placeholder="O que é, o que faz..."></textarea>
            </div>
            <div class="col-12">
              <label for="inputInfoAddProdut" class="form-label">Informações sobre o Produto</label>
              <textarea class="form-control" id="inputInfoAddProdut" rows="3"
                placeholder="Composição do produto, rendimento..." name="informacoes-uteis"></textarea>
            </div>
            <div class="col-12">
              <label for="inputImage1AddProdut" class="form-label">Imagem 1</label>
              <input type="text" name="imagem-1" class="form-control" id="inputImage1AddProdut"
                placeholder="Insira o nome da imagem 1 do produto">
            </div>
            <div class="col-12">
              <label for="inputImage2AddProdut" class="form-label">Imagem 2</label>
              <input type="text" class="form-control" id="inputImage2AddProdut"
                placeholder="Insira o nome da imagem 2 do produto" name="imagem-2">
            </div>
            <div class="col-12">
              <label for="inputImage3AddProdut" class="form-label">Imagem 3</label>
              <input type="text" class="form-control" id="inputImage3AddProdut"
                placeholder="Insira o nome da imagem 3 do produto" name="imagem-3">
            </div>
            <div class="col-md-4">
              <label for="inputCategoryAddProdut" class="form-label">Categoria</label>
              <select id="inputCategoryAddProdut" class="form-select" name="categoria">
                <option selected>Insira a categoria do produto...</option>
                  <?php foreach ($categorias as $categoria) :?>
                    <option value="<?= $categoria->id ?>"><?= $categoria->nome ?></option>
                  <?php endforeach; ?>
              </select>
            </div>
        </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary bottom-exit" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success">Adicionar</button>
          </div>
        </form>


      </div>
    </div>
  </div>
  <!--Fim do modal de adicionar-->


  <!-- Modal Editar Produto -->
  <?php foreach($produtos as $produto) : ?>
  <div class="modal fade" id="EditarProd-<?= $produto->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Editar Produto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form action="produtos/update" method="post" class="row g-3">
            <div class="col-md-8">
                <input type="hidden" name="id" value="<?= $produto->id ?>">
              <label for="inputNameProdut" class="form-label">Nome</label>
              <input type="text" class="form-control" name="nome" id="inputNameProdut"value="<?= $produto->nome ?>">
            </div>
            <div class="col-md-4">
              <label for="inputPrecoProdut" class="form-label">Preço</label>
              <input type="text" class="form-control" name="preco" id="inputPrecoProdut" value="<?= $produto->preco ?>">
            </div>
            <div class="col-12">
              <label for="inputDescritionProdut" class="form-label">Descrição do Produto</label>
              <textarea class="form-control" name="descricao" id="inputDescritionProdut" rows="3"
                > <?= $produto->descricao ?></textarea>
            </div>
            <div class="col-12">
              <label for="inputInfoProdut" class="form-label">Informações sobre o Produto</label>
              <textarea class="form-control" id="inputInfoProdut" rows="3"
                placeholder="Composição do produto, rendimento..." name="informacoes-uteis"><?= $produto->informacoes_uteis ?></textarea>
            </div>
            <div class="col-12">
              <label for="inputImage1Produt" class="form-label">Imagem 1</label>
              <input type="text" class="form-control" name="imagem-1" id="inputImage1Produt"
                value="<?= $produto->imagem_1 ?>">
            </div>
            <div class="col-12">
              <label for="inputImage2Produt" class="form-label">Imagem 2</label>
              <input type="text" class="form-control" id="inputImage2Produt"
                placeholder="Insira o nome da imagem 2 do produto" value="<?= $produto->imagem_2 ?>" name="imagem-2">
            </div>
            <div class="col-12">
              <label for="inputImage3Produt" class="form-label">Imagem 3</label>
              <input type="text" class="form-control" id="inputImage3Produt"
                placeholder="Insira o nome da imagem 3 do produto" value="<?= $produto->imagem_3 ?>" name="imagem-3">
            </div>
            <div class="col-md-4">
              <label for="inputCategoryProdut" class="form-label">Categoria</label>
              <select id="inputCategoryProdut" class="form-select" name="categoria">
                <option selected>Insira a categoria do produto...</option>
                  <?php foreach ($categorias as $categoria) :?>
                      <option value="<?= $categoria->id ?>"><?= $categoria->nome ?></option>
                  <?php endforeach; ?>
              </select>
            </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary bottom-exit" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-success">Editar</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
  <!--Fim do modal de editar-->


  <!-- Modal Visualizar Produto-->
  <?php foreach ($produtos as $produto) : ?>
  <div class="modal fade" id="VisualizarProd-<?= $produto->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Visualizar Produto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <fieldset disabled>
            <form class="row g-3">
              <div class="col-md-8">
                <label for="VisNameProdut" class="form-label">Nome</label>
                <input type="text" class="form-control" id="VisNameProdut" placeholder="<?= $produto->nome ?>">
              </div>
              <div class="col-md-4">
                <label for="VisPrecoProdut" class="form-label">Preço</label>
                <input type="text" class="form-control" id="VisPrecoProdut" placeholder="R$<?= $produto->preco ?>">
              </div>
              <div class="col-12">
                <label for="VisDescritionProdut" class="form-label">Descrição do Produto</label>
                <textarea class="form-control" id="VisDescritionProdut" rows="3"
                  placeholder="<?= $produto->descricao ?>"></textarea>
              </div>
              <div class="col-12">
                <label for="VisInfoProdut" class="form-label">Informações sobre o Produto</label>
                <textarea class="form-control" id="VisInfoProdut" rows="3" placeholder="<?= $produto->informacoes_uteis ?>"></textarea>
              </div>
              <div class="col-12">
                <label for="VisImage1Produt" class="form-label">Imagem 1</label>
                <input type="text" class="form-control" id="VisImage1Produt" placeholder="<?= $produto->imagem_1 ?>">
              </div>
              <div class="col-12">
                <label for="VisImage2Produt" class="form-label">Imagem 2</label>
                <input type="text" class="form-control" id="VisImage2Produt" placeholder="<?= $produto->imagem_2 ?>">
              </div>
              <div class="col-12">
                <label for="VisImage3Produt" class="form-label">Imagem 3</label>
                <input type="text" class="form-control" id="VisImage3Produt" placeholder="<?= $produto->imagem_3 ?>">
              </div>
              <div class="col-md-4">
                <label for="VisCategoryProdut" class="form-label">Categoria</label>
                <select id="VisCategoryProdut" class="form-select">
                    <option selected><?= $catProdutos[$produto->categoria]?></option>
                </select>
              </div>
            </form>
          </fieldset>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary bottom-exit" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
  <!--Fim do modal de visulizar-->


  <!-- Modal excluir produto-->
  <?php foreach ($produtos as $produto) :?>
  <div class="modal fade" id="ExcluiProd-<?= $produto->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Excluir Produto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="text-center">Deseja mesmo excluir esse produto?</p>
        </div>
        <div class="modal-footer">
            <form action="produtos/delete" method="post">
                <input type="hidden" value="<?= $produto->id ?>" name="id">
                <button type="button" class="btn btn-secondary bottom-exit" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
  <!--Fim do modal de excluir-->


  <!--------------------------------------------------------------------------------------------->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
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