<?php foreach ($animais as $indice => $animal) : 
            //if()
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="detalhe/<?=$animal['IDANIMAL']?>"><img class="card-img-top" src="/web-abrace-pet/uploads/<?=$imagens[$indice]['IMAGEM_ANIMAL']?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="detalhe/<?=$animal['IDANIMAL']?>"><?=$animal['NOMEANIMAL']?></a>
                  </h4>
                  <p class="card-text"><?=$animal['DESCRICAO_ANIMAL']?></p>
                </div>
              </div>
            </div>
            <?php endforeach ?>