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
                        <li class="nav-item"><a class="nav-item nav-link links-navbar" href="/home">Home</a></li>
                        <li class="nav-item"><a class="nav-item nav-link links-navbar" href="/produtos">Produtos</a></li>
                        <li class="nav-item"><a class="nav-item nav-link links-navbar" href="/contato">Contato</a></li>
                        <li class="nav-item"><a class="nav-item nav-link links-navbar" href="/quemsomos">Quem Somos</a></li>
                        <li class="nav-item"><a class="nav-item nav-link links-navbar" href="/login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="container-principal">
        <div class="carousel carousel-dark slide mb-0" data-bs-ride="carousel" id="carousel">
            <div class="carousel-indicators">
                <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carousel" type="button"></button>
                <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carousel" type="button"></button>
                <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carousel" type="button"></button>
            </div>
            <div class="carousel-inner rounded-bottom">
                <div class="carousel-item active" data-bs-interval="7000">
                    <img alt="Dog 1" src="../../public/img/macacode.svg">
                </div>
                <div class="carousel-item" data-bs-interval="7000">
                    <img alt="Dog 2" src="../../public/img/macacode.svg">
                </div>
                <div class="carousel-item" data-bs-interval="7000">
                    <img alt="Dog 3" src="../../public/img/macacode.svg">
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
                <div class="card card-principal" style="width: 18rem;">
                    <a href="view-produto.html"><img src="../../public/img/macacode.svg" class="card-img-top" alt="..."></a>
                    <a href="view-produto.html"><button class="btn btn-detalhes">Ver Produto</button></a>
                    <div class="corpo-card">
                        <div class="categorias">
                            <button class="btn btn-categoria racao">Ração</button>
                            <button class="btn btn-categoria cachorro">Cachorro</button>
                        </div>
                        <h5 class="nome-produto">MyRação para raças pequenas</h5>
                        <p class="preco-produto">R$29,90</p>
                    </div>
                </div><!-- card1 -->
                <div class="card card-principal" style="width: 18rem;">
                    <a href="view-produto.html"><img src="../../public/img/macacode.svg" class="card-img-top" alt="..."></a>
                    <a href="view-produto.html"><button class="btn btn-detalhes">Ver Produto</button></a>
                    <div class="corpo-card">
                        <div class="categorias">
                            <button class="btn btn-categoria racao">Ração</button>
                            <button class="btn btn-categoria cachorro">Cachorro</button>
                        </div>
                        <h5 class="nome-produto">MyRação para raças pequenas</h5>
                        <p class="preco-produto">R$29,90</p>
                    </div>
                </div><!-- card2 -->
                <div class="card card-principal" style="width: 18rem;">
                    <a href="view-produto.html"><img src="../../public/img/macacode.svg" class="card-img-top" alt="..."></a>
                    <a href="view-produto.html"><button class="btn btn-detalhes">Ver Produto</button></a>
                    <div class="corpo-card">
                        <div class="categorias">
                            <button class="btn btn-categoria racao">Ração</button>
                            <button class="btn btn-categoria cachorro">Cachorro</button>
                        </div>
                        <h5 class="nome-produto">MyRação para raças pequenas</h5>
                        <p class="preco-produto">R$29,90</p>
                    </div>
                </div><!-- card3 -->
                <div class="card card-principal" style="width: 18rem;">
                    <a href="view-produto.html"><img src="../../public/img/macacode.svg" class="card-img-top" alt="..."></a>
                    <a href="view-produto.html"><button class="btn btn-detalhes">Ver Produto</button></a>
                    <div class="corpo-card">
                        <div class="categorias">
                            <button class="btn btn-categoria racao">Ração</button>
                            <button class="btn btn-categoria cachorro">Cachorro</button>
                        </div>
                        <h5 class="nome-produto">MyRação para raças pequenas</h5>
                        <p class="preco-produto">R$29,90</p>
                    </div>
                </div><!-- card4 -->
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


    <footer class="py-4 mt-4 bg-blue">
        <div class="container">
            <div class="row border-bottom justify-content-center align-items-center m-0 mb-4">
                <ul class="nav justify-content-center mb-4">
                    <li class="nav-item"><a href="/home" class="nav-link px-2 links-footer">Início</a></li>
                    <li class="nav-item"><a href="/quemsomos" class="nav-link px-2 links-footer">Sobre Nós</a></li>
                    <li class="nav-item"><a href="/produtos" class="nav-link px-2 links-footer">Nossos Produtos</a></li>
                    <li class="nav-item"><a href="/contato" class="nav-link px-2 links-footer">Fale Conosco</a></li>
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
                            <li class="nav-item"><a href="mailto: maycaopetshop@gmail.com" class="nav-link px-2 links-footer"><i class="fas fa-envelope redes-sociais"></i></a></li>
                            <li class="nav-item"><a href="https://www.instagram.com" class="nav-link px-2 links-footer"><i class="fab fa-instagram redes-sociais"></i></a></li>
                            <li class="nav-item"><a href="https://www.twitter.com" class="nav-link px-2 links-footer"><i class="fab fa-twitter redes-sociais"></i></a></li>
                            <li class="nav-item"><a href="https://web.whatsapp.com" class="nav-link px-2 links-footer"><i class="fab fa-whatsapp redes-sociais"></i></a></li>
                            <li class="nav-item"><a href="https://www.facebook.com" class="nav-link px-2 links-footer"><i class="fab fa-facebook redes-sociais"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>


            <div class="row justify-content-center align-items-center m-0">
                <p class="text-center text-muted m-0 p-0 mt-2">© 2021 Code Jr</p>
            </div>


        </div>
    </footer>

    <script crossorigin="anonymous" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="../../public/js/home.js"></script>
</body>

</html>