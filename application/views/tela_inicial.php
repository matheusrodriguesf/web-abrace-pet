<?php $this->load->view('shared/cabecalho'); ?>

<html>
  <head>
  <style> 
    /*imagens do Carousel*/  /*
      .carousel-inner {  
        padding-top: 5px;  
        padding-right: 2em;  
        padding-bottom: 4px;  
        padding-left: 2em;  
      }  
    /*fim imagens do Carousel*/ 
    /*parágrafo*/
      .carousel p{
        text-decoration: underline;
        font-size: 155%;
        text-shadow: 2px 2px 4px #000000;
        text-align: center;
      }

    /*Fim parágrafo*/

  </style>  

  </head> 
  <body>
		<!--Página principal-->
    <main role="main">
      <!--Carousel-->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!--declaração dos três Slides -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!--Fim declaração dos três Slides -->
        <!--Primeiro Slide -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide d-block w-100" src="http://oftalmologiapet.com.br/slide/demo/images/sld_old%20(10).jpg" alt="First slide" height="600" width="1400">
            
              <div class="carousel-caption text-left">
                <p>
                    Um cachorro não precisa de carrões, de casas grandes ou roupas de marca, um graveto está ótimo para ele. 
                    Um cachorro não se importa se você é rico ou pobre, inteligente ou idiota, esperto ou burro. 
                    Dê seu coração para ele e ele lhe dará o dele. 
                    🐶
                </p>
              </div>
            
          </div>
          <!--Fim primeiro Slide -->
          <!--Segundo Slide -->
          <div class="carousel-item">
            <img class="second-slide d-block"  src="https://cdn.allwallpaper.in/wallpapers/1920x1080/15261/pet-love-1920x1080-wallpaper.jpg" alt="Second slide" height="600" width="1400">
            <div class="container">
              <div class="carousel-caption">
                <p>
                  A compaixão pelos animais está intimamente ligada à bondade de carácter, e pode ser seguramente afirmado que quem é cruel com os animais não pode ser um bom homem. 
                  </br>💗
                </p>
              </div>
            </div>
          </div>
          <!--Fim segundo Slide -->
          <!--Terceiro Slide -->
          <div class="carousel-item">
            <img class="third-slide" src="http://www.gtoninelli.com/wp-content/uploads/2017/11/google-hidden-content.jpg" alt="Third slide" height="600" width="1400">
            <div class="container">
              <div class="carousel-caption text-right">
                <p>
                    O gato é uma lição diária de afeto verdadeiro e fiel. Suas manifestações são íntimas e profundas. Exigem recolhimento, entrega e atenção.
                    </br>🐱
                </p>
              </div>
            </div>
          </div>
          <!--Fim terceiro Slide -->
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--Fim Carousel-->

      <!-- Parte abaixo do carousel -->
      <div class="container marketing">
        <!-- Três colunas abaixo do carousel -->
        <div class="row">
          <!-- coluna 01 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="http://www.erblicken.com/wp-content/uploads/2017/10/Funny_Dobby_4-1000x1000.jpg" width="140" height="140">
            <p>
                Os cães são o nosso elo com o Paraíso. Eles não conhecem a maldade, a inveja ou o descontentamento. Sentar-se com um cão ao pé de uma colina numa linda tarde, é voltar ao Éden onde ficar sem fazer nada não era tédio, era paz.
            </p>
          </div>
          <!-- fim coluna 01-->
          <!-- coluna 02 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="http://lupusalimentos.com.br/system/wp-content/uploads/2014/10/calculo-renal-dog-cat.jpg" alt="Generic placeholder image" width="140" height="140">
            <p>
                Quando nos dedicamos a uma causa não é esperando reconhecimento, é porque fazer algo alegra nossa alma e virar o rosto nem é uma opção. 
                </br>Amigo a gente não procura, o coração da gente é quem encontra.
            </p>
          </div>
          <!-- fim coluna 02-->
          <!-- coluna 03 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="https://usercontent1.hubstatic.com/8880514_f496.jpg" alt="Generic placeholder image" width="140" height="140">
            <p>
                Um gato tem honestidade emocional absoluta: os seres humanos, por uma razão ou 
                outra, pode esconder os seus sentimentos, mas o gato não.
            </p>
          </div><!-- /.col-lg-4 -->
          <!-- fim coluna 03-->
        </div> <!-- /.row/ -->
        <!-- Fim das três colunas abaixo do carousel -->
      </div>
      <!-- Três colunas abaixo do carousel -->
    </div>
    <!--Fim página principal-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php $this->load->view('shared/footer') ?>
<?php $this->load->view('shared/rodape'); ?>