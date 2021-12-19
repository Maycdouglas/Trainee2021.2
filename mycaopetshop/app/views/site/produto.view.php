<!DOCTYPE html>

<html lang="en">

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Produto</title>
  <link rel="stylesheet" href="../../public/css/view-produto.css">
  <link rel="stylesheet" href="../../public/css/navbarft.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

</head>




<body>

<?php include 'app/views/includes/navbar.php';?>





  <div class="container">
    <div class="caminho">
      <ul>
        <li><a href="/produtos">Produtos</a></li>
        <li> > </li>
        <li><?= $produto->nome ?></li>
      </ul>
    </div>
  </div>



  <div class="container card-prod">
    <div class="row justify-content-center align-items-center">
      <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="card mb-3 p-2">
          <div class="row justify-content-center align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6">


              <div class="carousel carousel-dark slide mb-0" data-bs-ride="carousel" id="carousel">
                <div class="carousel-indicators">
                  <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0"
                    data-bs-target="#carousel" type="button"></button>
                  <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carousel" type="button"></button>
                  <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carousel" type="button"></button>
                </div>
                <div class="carousel-inner rounded">
                  <div class="carousel-item active" data-bs-interval="7000">
                    <img alt="Dog 1" src="../../public/img/<?= $produto->imagem_1 ?>.jpg">
                  </div>
                  <div class="carousel-item" data-bs-interval="7000">
                    <img alt="Dog 2" src="../../public/img/macacode.svg">
                  </div>
                  <div class="carousel-item" data-bs-interval="7000">
                    <img alt="Dog 3" src="../../public/assets/MyCão escrito em fundo amarelo.png">
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
            </div>


            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="card-body px-0">
                <h5 class="card-title"><b><?= $produto->nome ?></b></h5>
                <p class="card-text"><b>R$<?= $produto->preco ?></b></p>
                <ul>
                  <li class="<?= $categorias[$produto->categoria] ?>"><?= $categorias[$produto->categoria] ?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="informacoes-produto">
      <h3>Descrição</h3>
      <hr>
      <p><?= $produto->descricao ?></p>
      <h3>Informações</h3>
      <hr>
      <p><?= $produto->informacoes_uteis ?></p>
    </div>
  </div>






  <?php include 'app/views/includes/footer.php';?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>