<?php $this->load->view('shared/cabecalho'); ?>

<!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Nome Animal</h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <div class="carousel slide" id="carousel-883813">
        <ol class="carousel-indicators">
          <li data-slide-to="0" data-target="#carousel-883813">
          </li>
          <li data-slide-to="1" data-target="#carousel-883813">
          </li>
          <li data-slide-to="2" data-target="#carousel-883813" class="active">
          </li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="d-block w-100" alt="Carousel Bootstrap First" src="https://wallpapersite.com/images/pages/pic_w/6988.jpg">
            <div class="carousel-caption">
              <h4>
                First Thumbnail label
              </h4>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.animeunited.com.br/wp-content/uploads/2017/08/we-can_213n.png">
            <div class="carousel-caption">
              <h4>
                Second Thumbnail label
              </h4>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
            </div>
          </div>
          <div class="carousel-item active">
            <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://heroisnopapel.com/wp-content/uploads/2015/04/naruto-shippuden-1.jpg">
            <div class="carousel-caption">
              <h4>
                Third Thumbnail label
              </h4>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
            </div>
          </div>
        </div> <a class="carousel-control-prev" href="#carousel-883813" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-883813" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
      </div>
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Informações</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
          <h3 class="my-3">Detalhes Animal</h3>
          <ul>
            <li>Lorem Ipsum</li>
            <li>Dolor Sit Amet</li>
            <li>Consectetur</li>
            <li>Adipiscing Elit</li>
          </ul>
          <button type="button" class="btn btn-success">
				Adotar
			</button>
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Descrição</h3>

      <div class="row">

        <div class="col-md-12">
			<p>
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p>
		</div>

      </div>
      <!-- /.row -->
    </div>
<?php $this->load->view('shared/footer') ?>
<?php $this->load->view('shared/rodape'); ?>