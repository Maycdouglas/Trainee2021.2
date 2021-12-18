<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/styles.css">
    <link rel="stylesheet" href="../../public/css/navbarft.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/c11bde093d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <title>Contato</title>

</head>

<body>
    
<?php include 'app/views/site/includes/navbar.php';?>

    <div class="container corpo-contato">

        <h1 class="text-center texto-contato">Contato</h1> <br>
        <hr>
        <h1 class="text-center texto-contato mb-5">ENVIE UMA MENSAGEM</h1>
        <div>

          <h3 class="d-flex flex-column align-items-center text-center vias-contato">
            <span><a href="mailto:contato@mycao.com.br" target="_blank"><i class="far fa-envelope me-2"></i>contato@mycao.com.br</a></span>
            <span><a href="#" target="_blank"><i class="fab fa-instagram me-2"></i>mycao</a></span>
            <span><a href="tel:(32) 99999-9999" target="_blank"><i class="fas fa-mobile-alt me-2"></i>(32) 99999-9999</a></span>
          </h3>

        </div>

        <form action="contato/enviar" method="POST" class="formulario">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nome</label>
              <input name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Seu nome completo aqui">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Assunto</label>
                <input name="assunto" class="form-control" id="exampleFormControlInput1" placeholder="Seu texto aqui">
              </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Mensagem</label>
              <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <br>
            <button type="submit" class="botao-enviar btn btn-primary">Enviar</button>
          </form>

          <div class="mapa">
            <hr>
            <h1><i class="fas fa-map-marker-alt"></i> Rua MyCao, Juiz de Fora</h1>

          <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=juiz%20de%20fora%20ufjf&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:100%;}</style><a href="https://www.embedgooglemap.net">google maps embed iframe generator</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%;}</style></div></div>
          
          </div>

    </div>



    <?php include 'app/views/site/includes/footer.php';?>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
    <script crossorigin="anonymous" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>