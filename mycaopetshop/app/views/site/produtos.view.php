<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/produtos.css">
    <link rel="stylesheet" href="../../public/css/navbarft.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <div class="card cards" style="width: 18rem;">
                    <a href="view-produto.html"><img src="../../public/img/macacode.svg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <div class="categorias">
                            <button class="btn btn-categoria racao">Ração</button>
                            <button class="btn btn-categoria cachorro">Cachorro</button>
                        </div>
                        <h5 class="card-title">MyRação Raças Pequenas</h5>
                        <p class="card-text">R$19,90</p>
                        <a href="view-produto.html" class="btn btn-details">Ver Detalhes</a>
                    </div>
                </div><!-- card1 -->
                <?php foreach ($produtos as $produto) :?>
                    <div class="card cards" style="width: 18rem;">
                        <a href="view-produto.html"><img src="<?= $produto->foto ?>" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <div class="categorias">
                                <button class="btn btn-categoria racao">Ração</button>
                                <button class="btn btn-categoria cachorro">Cachorro</button>
                            </div>
                            <h5 class="card-title"><?= $produto->nome ?></h5>
                            <p class="card-text"><?= $produto->preco ?></p>
                            <a href="view-produto.html" class="btn btn-details">Ver Detalhes</a>
                        </div>
                    </div><!-- card1 -->
                <?php endforeach; ?>
            <div class="pagination">
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
                  </nav>
            </div>
        </section>
    </main>


    <?php include 'app/views/includes/footer.php';?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>