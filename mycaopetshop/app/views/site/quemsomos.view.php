<!DOCTYPE html>

<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/quemsomos.css">
    <link rel="stylesheet" href="../../public/css/navbarft.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>Quem Somos</title>
</head>

<body class="corpo">

    <?php include 'app/views/includes/navbar.php'; ?>


    <main class="container mt-5">

        <div class="row justify-content-center align-items-center p-0 m-0 corpo-conteudo">
            <h1 class="titulo-quem-somos justify-content-center align-content-center">Quem Somos</h1>
            <hr class="class-hr">
            <div class="col-sm-12 col-md-12 col-lg-6 justify-content-center align-items-center div-img-quemsomos">
                <div class="row justify-content-center align-items-center p-0 m-0">
                    <img class="justify-content-center align-items-center img-principal" src="../../public/img/macacode.svg" alt="Imagem-principal">

                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 texto-principal">

                <p>Detective Conan (名探偵コナン Meitantei Konan?), mais conhecido como Case Closed nos Estados Unidos, é
                    um mangá de mistério japonês escrito e ilustrado por Gosho Aoyama. É serializado na revista Weekly
                    Shōnen Sunday da Shogakukan desde janeiro de 1994, e foi compilado em 99 volumes tankōbon até
                    maio de 2021. Devido a problemas legais com o nome Detective Conan, as versões em inglês de Detective
                    Conan feitas pela Funimation e Viz foram renomeadas para Case Closed. A história segue o
                    detetive colegial Shinichi Kudo (renomeado como Jimmy Kudo em várias traduções para o inglês) que se
                    transformou em uma criança enquanto investigava uma organização misteriosa. Enquanto criança,
                    resolve uma infinidade de casos enquanto personificava o pai de sua melhor amiga de infância e
                    outros personagens.</p>


                <p>Os volumes tankōbon do mangá tinham mais de 230 milhões de cópias em circulação em todo o mundo
                    em 2018, tornando-se a quinta série de mangá mais vendida de todos os tempos. Em 2001, o mangá
                    recebeu o 46º Prêmio Shogakukan Manga na categoria shōnen. A adaptação do anime foi bem recebida e
                    classificada entre as 20 primeiras nas pesquisas da Animage entre 1996 e 2001.</p>


            </div>

        </div>
        <hr>
        <div class="row justify-content-center  align-content-center p-0 m-0 align-items-center div-dos-cards  ">
            <div class="card m-2  align-items-center cards-quemsomos" style="width: 18rem;">
                <i class="icones-card-quemsomos fas fa-dove pt-4"></i>
                <div class="card-body">
                    <h5 class="card-title text-center">Missão</h5>
                    <p class="card-text">Oferecer produtos e serviços de qualidade para todo o Brasil, afim de melhorar a qualidade de vida dos pets.</p>

                </div>
            </div>

            <div class="card m-2  align-items-center cards-quemsomos" style="width: 18rem;">
                <i class="icones-card-quemsomos fas fa-dog pt-4"></i>
                <div class="card-body">
                    <h5 class="card-title text-center">Visão</h5>
                    <p class="card-text">Ser referência no Brasil como um petshop de alta qualidade e confiabilidade, trazendo conforto para a família.
                    </p>
                </div>
            </div>

            <div class="card m-2  align-items-center cards-quemsomos" style="width: 18rem;">
                <i class="icones-card-quemsomos fas fa-hands-helping pt-4"></i>
                <div class="card-body">
                    <h5 class="card-title text-center">Valores</h5>
                    <p class="card-text text-center">Orgulho de fazer parte da equipe,ter humildade,além de ser uma
                        prestadora de
                        serviços de qualidade. </p>
                </div>
            </div>
        </div>



    </main>

    <?php include 'app/views/includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>