<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <!-- Modal -->
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
              <form class="form-horizontal" method="post" action="<?= base_url('login/usuario/logar') ?>">
                <fieldset>
                <!-- Text input-->
                <div class="form-group">
                  <div>
                    <label for="CPF_CNPJ">CPF ou CNPJ</label>
                    <input id="CPF_CNPJ" name="CPF_CNPJ" type="text" placeholder="CPF ou CNPJ" class="form-control input-md">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <div>
                    <label class="control-label" for="SENHA">Senha</label>
                    <input id="SENHA" name="SENHA" type="password" placeholder="Senha" class="form-control input-md">
                  </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                  <label class=" control-label" for="Cadastrar"></label>
                  <div class="">
                    <button class="btn btn-primary" href="<?= base_url('login/usuario') ?>" type="submit">Login</button>
                  </div>
                </div>
                </fieldset>
              </form>              
            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <form class="form-horizontal" method="post" action="<?= base_url('cadastro/usuario/add') ?>">
                <fieldset>
                <!-- Text input-->
                <div class="form-group">
                  <label class=" control-label" for="NOME">Nome</label>  
                  <div class="md-3">
                    <input id="NOME" name="NOME" type="text" placeholder="Nome Completo" class="form-control input-md">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class=" control-label" for="CPF_CNPJ">CPF ou CNPJ</label>  
                  <div class="">
                    <input id="CPF_CNPJ" name="CPF_CNPJ" type="text" placeholder="CPF ou CNPJ" class="form-control input-md">
                  </div>
                </div>

                <!-- Multiple Radios -->
                <div class="form-group">
                  <label class=" control-label" for="IND_RESPONSAVEL">Tipo de Perfil</label>
                  <div class="">
                    <div class="radio">
                      <label for="IND_RESPONSAVEL-0">
                      <input type="radio" name="IND_RESPONSAVEL" id="IND_RESPONSAVEL-0" value="1" checked="checked">
                      Pessoa Fisica
                      </label>
                    </div>
                    <div class="radio">
                      <label for="IND_RESPONSAVEL-1">
                      <input type="radio" name="IND_RESPONSAVEL" id="IND_RESPONSAVEL-1" value="2">
                      Entidade de Adoção
                      </label>
                    </div>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class=" control-label" for="DATA_NASCIMENTO">Data de Nascimento</label>  
                  <div class="">
                    <input id="DATA_NASCIMENTO" name="DATA_NASCIMENTO" type="text" placeholder="Data de Nascimento" class="form-control input-md">
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class=" control-label" for="UF">Estado</label>
                  <div class="">
                    <select id="UF" name="UF" class="form-control">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Catarina</option> 
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    </select>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class=" control-label" for="ENDERECO">Endereço</label>  
                  <div class="">
                    <input id="ENDERECO" name="ENDERECO" type="text" placeholder="Endereço" class="form-control input-md">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class=" control-label" for="SENHA">Senha</label>  
                  <div class="">
                    <input id="SENHA" name="SENHA" type="password" placeholder="Senha" class="form-control input-md">
                  </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                  <label class=" control-label" for="Cadastrar"></label>
                  <div class="">
                    <button class="btn btn-primary" href="<?= base_url('cadastro/usuario') ?>" type="submit">Cadastrar</button>
                  </div>
                </div>
                </fieldset>
              </form>

            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>

  <a class="navbar-brand" href="#">Abrace Pets</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav">
      <li class="nav-item">
        <?php if($this->session->userdata("usuario_logado")) { ?>
          <a class="nav-item nav-link" href="<?= base_url('pet/adocao')?>">Cadastrar Animal</a>
        <?php } ?>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Adoção</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Lar Temporário</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Quem Somos</a>
      </li>
    </ul>

    <form class="form-inline mx-auto">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <ul class="navbar-nav">
      <li class="nav-item">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Acessar
        </button>
      </li>
      <li class="nav-item">
        <?php if($this->session->userdata("usuario_logado")) { ?>
          <button type="button" class="btn btn-danger" href="<?= base_url('login/usuario/deslogar') ?>">
            Sair
          </button>
        <?php } ?>
      </li>
    </ul>

  </div>
</nav>