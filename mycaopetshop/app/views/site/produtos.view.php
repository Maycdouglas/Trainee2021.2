<?php //include_once('../../../config.php');

use App\Core\App;

$tabProdutos = App::get('database')->selectAll('produtos');

// session_start();
$link = mysqli_connect("127.0.0.1", "root", "", "mycaopetshop") or die("Sem conexão com o servidor");



// verificar se esta sendo passado na pagina atual, senão é atribuido a pagina
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

//selecionar todos os produtos da tabela
$result_produtos =  "SELECT * from `produtos`";
$resultado_produtos = mysqli_query($link, $result_produtos);

//contar o total de produtos
$total_produtos = mysqli_num_rows($resultado_produtos);

//seta a quantidade de produtos por pagina
$quantidade_pg = 6;

//calcula o numero de paginas necessarias para apresentar os produtos
$num_pg = ceil($total_produtos / $quantidade_pg);

//calcular o inicio da visualizacao
$inicio = ($quantidade_pg * $pagina) - $quantidade_pg;

//selecionar os produtos a serem apresentados na pagin
$result_produtos = "SELECT from produtos limit, $quantidade_pg";
$resultado_produtos = mysqli_query($link, $result_produtos);
$total_produtos = mysqli_num_rows($resultado_produtos);

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/produtos.css">
    <link rel="stylesheet" href="../../public/css/navbarft.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MyCão Pet Shop - Produtos</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark shadow bg-blue">
            <div class="container">

                <a href="#" class="d-flex align-items-center mb-0 text-decoration-none">
                    <img class="logo-navbar p-0 m-0" src="../../public/assets/Logo escrita.png">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-item nav-link links-navbar" href="home.html">Home</a></li>
                        <li class="nav-item"><a class="nav-item nav-link links-navbar" href="produtos.view.php">Produtos</a></li>
                        <li class="nav-item"><a class="nav-item nav-link links-navbar" href="contato.html">Contato</a></li>
                        <li class="nav-item"><a class="nav-item nav-link links-navbar" href="quemsomos.html">Quem Somos</a></li>
                        <li class="nav-item"><a class="nav-item nav-link links-navbar" href="login.html">Login</a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
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
                <?php foreach ($produtos as $produto) : ?>
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
                <?php
                //verificar a pagina anterior e posterior
                $pag_anterior = $pagina - 1;
                $pag_posterior = $pagina + 1;

                ?>
                <div class="pagination">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">


                            <li class="page-item disabled">
                                <?php
                                if ($pag_anterior != 0) { ?>
                                    <a class="page-link" href="produtos.view.php?pagina=<?php echo $pag_anterior; ?> ">Previous</a>

                                <?php } else {  ?>
                                    <a class="page-link" href="#">Previous</a>

                                <?php }  ?>
                            </li>

                            <li class="page-item disabled">
                                <?php
                                if ($pag_posterior != 0) { ?>
                                    <a class="page-link" href="produtos.view.php?pagina=<?php echo $pag_posterior; ?> ">Next</a>

                                <?php } else {  ?>
                                    <a class="page-link" href="#">Next</a>

                                <?php }  ?>
                            </li>

                            <!-- apresentar a paginacao -->
                            <?php for ($i = 1; $i < $num_pg + 1; $i++) { ?>
                                <li class="page-item active"><a class="page-link" href="produtos.view.php?pagina=<?php echo $i; ?> "><?php echo $i; ?>1</a></li>
                            <?php } ?>

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
                  </nav>
            </div> -->
        </section>
    </main>


    <footer class="py-4 mt-4 bg-blue">
        <div class="container">
            <div class="row border-bottom justify-content-center align-items-center m-0 mb-4">
                <ul class="nav justify-content-center mb-4">
                    <li class="nav-item"><a href="home.html" class="nav-link px-2 links-footer">Início</a></li>
                    <li class="nav-item"><a href="quemsomos.html" class="nav-link px-2 links-footer">Sobre Nós</a></li>
                    <li class="nav-item"><a href="produtos.view.php" class="nav-link px-2 links-footer">Nossos Produtos</a></li>
                    <li class="nav-item"><a href="contato.html" class="nav-link px-2 links-footer">Fale Conosco</a></li>
                </ul>
            </div>


            <div class="row justify-content-center align-items-center m-0 mb-2">
                <div class="col-md-8 col-12">
                    <p class="text-center my-2 texto-footer">Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem
                        accusantium doloremque laudantium, totam rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo.
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur.</p>
                </div>
            </div>


            <div class="row justify-content-center align-items-center m-0 mb-2">
                <div class="col-md-8 col-12">
                    <div class="row justify-content-center align-items-center m-0 mb-2">

                        <ul class="nav justify-content-center m-0 p-0">
                            <li class="nav-item"><a href="#" class="nav-link px-2 links-footer"><i class="fas fa-envelope redes-sociais"></i></a></li>
                            <li class="nav-item"><a href="#" class="nav-link px-2 links-footer"><i class="fab fa-instagram redes-sociais"></i></a></li>
                            <li class="nav-item"><a href="#" class="nav-link px-2 links-footer"><i class="fab fa-twitter redes-sociais"></i></a></li>
                            <li class="nav-item"><a href="#" class="nav-link px-2 links-footer"><i class="fab fa-whatsapp redes-sociais"></i></a></li>
                            <li class="nav-item"><a href="#" class="nav-link px-2 links-footer"><i class="fab fa-facebook redes-sociais"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>


            <div class="row justify-content-center align-items-center m-0">
                <p class="text-center text-muted m-0 p-0 mt-2">© 2021 Code Jr</p>
            </div>


        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>