<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/produtos.css">
    <link rel="stylesheet" href="../../public/css/navbarft.css">
    <link rel="stylesheet" href="../../public/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>MyCão Pet Shop - Produtos</title>
</head>

<body>

<?php include 'app/views/includes/navbar.php';?>

    <main class="container">
        <section>
            <div class="principal text-center mt-4">
                <h1>Nossos Produtos</h1>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
                    <button class="btn btn-outline btn-principal" type="submit">Pesquisar</button>
                </form>
            </div>
            <div class="section-principal">
                <?php foreach ($produtosPaginacao as $produto) : ?>
                    <div class="card cards" style="width: 18rem;">
                        <a href="/produto?id=<?= $produto->id ?>"><img src="../../../public/img/<?= $produto->imagem_1 ?>.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <div class="categorias">
                                <button class="btn btn-categoria <?= $categoriaProduto[$produto->categoria] ?>"><?= $categoriaProduto[$produto->categoria] ?></button> <!--- aqui deve vir a categoria do produto referenciado, tanto na classo quanto no escrito --->
                            </div>
                            <h5 class="card-title"><?= $produto->nome ?></h5>
                            <p class="card-text">R$ <?= $produto->preco ?></p>
                            <a href="/produto?id=<?= $produto->id ?>" class="btn btn-details">Ver Detalhes</a>
                        </div>
                    </div><!-- card1 -->
                <?php endforeach; ?>
            </div>
                <?php
                //verificar a pagina anterior e posterior
                $totalPaginas = ceil($totalPaginas);
                $pag_anterior = $pagina - 1;
                $pag_posterior = $pagina + 1;

                ?>
                <div class="pagination">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">


                            <li class="page-item <?php if($pagina == 1) :?> disabled <?php else : ?> active <?php endif; ?> ">
                                <a class="page-link" href="/produtos?pg=<?= $pag_anterior ?>">Previous</a>
                            </li>

                            <!-- apresentar a paginacao -->
                            <?php for ($i = 1; $i < $totalPaginas + 1; $i++) { ?>
                                <li class="page-item active"><a class="page-link" href="/produtos?pg=<?= $i ?> "><?= $i ?></a></li>
                            <?php } ?>
                            </li>
                            <li class="page-item <?php if($pagina == $totalPaginas) :?> disabled <?php else : ?> active <?php endif; ?>">
                                <a class="page-link" href="/produtos?pg=<?= $pag_posterior ?> ">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>









                <!-- <div class="pagination">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav> -->
        </section>
    </main>


    <?php include 'app/views/includes/footer.php';?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>