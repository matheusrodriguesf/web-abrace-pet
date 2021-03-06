  <nav class="navbar navbar-expand-lg navbar-light">
  
    <!-- Modal -->
    <!--Login e cadastro-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">

            <h5 class="modal-title" id="exampleModalLabel">Acessar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

          </div>
          <div class="modal-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cadastro</a>
              </li>
            </ul> 

            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <?php $this->load->view('login_usuario'); ?>               
              </div>

              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <?php $this->load->view('cadastro_usuario'); ?>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
    <!--fim cadastro/login-->

    <!--cabeçalho-->
    <a class="navbar-brand" href="<?= base_url('principal')?>">Abrace Pets
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
      <ul class="navbar-nav">
        <li class="nav-item">
          <?php if($this->session->userdata("usuario_logado")) { ?>
            <a class="nav-item nav-link" href="<?= base_url('gerenciamento_pet')?>">Gerenciar Pet</a>
          <?php } ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('pesquisa_pet')?>">Listagem de Pets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('somos')?>">Quem Somos</a>
        </li>
      </ul>
      <!--pesquisa-->
      <!-- <form class="form-inline mx-auto">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
      </form> -->
      <!--fim pesquisa-->
      <!--botão cadastro login-->
      <ul class="navbar-nav mt-2 ">
        <li class="nav-item">
          <?php if(!$this->session->userdata("usuario_logado")) { ?>
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
              Acessar
            </button>
          <?php } ?>
        </li>
        <li class="nav-item">
          <?php if($this->session->userdata("usuario_logado")) { ?>
            <a class="btn btn-danger" href="<?= base_url('login/usuario/deslogar') ?>" role="button">Sair</a>
          <?php } ?>
        </li>
      </ul>
      <!--Fim botão cadastro login-->
    </div>
    <!--fim cabeçalho-->  
  </nav>
