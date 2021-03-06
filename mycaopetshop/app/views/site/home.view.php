<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">

    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" rel="stylesheet">

    <link href="../../public/css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/navbarft.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>MyCão Pet Shop</title>
</head>

<body>
    <button class="btn btn-warning btn-floating btn-lg" data-bs-toggle="tooltip" id="btn-back-to-top" title="Back to top!" type="button">
        <svg class="bi bi-arrow-up" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" fill-rule="evenodd" />
        </svg>
    </button>

    <?php include 'app/views/includes/navbar.php';?>
    
    <section class="container-principal">
        <div class="carousel slide mb-0" data-bs-ride="carousel" id="carousel">
            <div class="carousel-indicators">
                <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carousel" type="button"></button>
                <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carousel" type="button"></button>
                <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carousel" type="button"></button>
            </div>
            <div class="carousel-inner rounded-bottom">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img alt="Dog 1" src="../../../public/img/carrossel_1.jpg">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img alt="Dog 2" src="../../../public/img/carrossel_2.jpg">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img alt="Dog 3" src="../../../public/img/carrossel_3.jpg">
                </div>
            </div>
            <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carousel" type="button">
                <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carousel" type="button">
                <span aria-hidden="true" class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <main class="container">
        <section class="produtos">
            <div class="titulos">
                <h2>Novos Produtos</h2>
            </div>
            <div class="cards-container">
                <?php foreach ($produtos as $produto) : ?>
                    <div class="card card-principal" style="width: 18rem;">
                        <a href="/produto?id=<?= $produto->id ?>"><img src="../../public/img/<?= $produto->imagem_1 ?>.jpg" class="card-img-top" alt="..."></a>
                        <a href="/produto?id=<?= $produto->id ?>"><button class="btn btn-detalhes">Ver Produto</button></a>
                        <div class="corpo-card">
                            <div class="categorias">
                                <button class="btn btn-categoria <?= $categoriaProduto[$produto->categoria] ?>"><?= $categoriaProduto[$produto->categoria] ?></button>
                            </div>
                            <h5 class="nome-produto"><?= $produto->nome ?></h5>
                            <p class="preco-produto">R$ <?= $produto->preco ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="cta-container quem-somos">
            <div class="image-cta">
                <img src="../../public/img/quem-somos.svg" alt="Quem somos">
            </div>
            <div class="text-cta">
                <h2>Quem somos?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas massa risus, sagittis sed est
                    vulputate, tincidunt auctor sapien. Nam et quam vitae nunc scelerisque dapibus. Vestibulum suscipit
                    metus odio, eget tempus sem maximus et. Sed quis placerat velit, vitae ullamcorper lectus. Nulla
                    suscipit eros a orci consectetur, vel feugiat ipsum posuere. Praesent consectetur varius
                    consectetur. Quisque</p>
                <a href="/quemsomos"><button class="btn btn-cta">Conheça-nos</button></a>
            </div>
        </section>

        <section class="cta-container contato">
            <div class="text-cta">
                <h2>Como entrar em contato?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas massa risus, sagittis sed est
                    vulputate, tincidunt auctor sapien. Nam et quam vitae nunc scelerisque dapibus. Vestibulum suscipit
                    metus odio, eget tempus sem maximus et. Sed quis placerat velit, vitae ullamcorper lectus. Nulla
                    suscipit eros a orci consectetur, vel feugiat ipsum posuere. Praesent consectetur varius
                    consectetur. Quisque</p>
                <a href="/contato"><button class="btn btn-cta">Entre em contato</button></a>
            </div>
            <div class="image-cta image-quem-somos">
                <img src="../../public/img/contato.svg" alt="contato">
            </div>
        </section>

    </main>


    <?php include 'app/views/includes/footer.php';?>

    <script crossorigin="anonymous" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="../../public/js/home.js"></script>
</body>

</html>