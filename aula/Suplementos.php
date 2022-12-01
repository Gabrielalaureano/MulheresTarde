<?php
    require_once 'head.php';
    require_once 'menu.php';
    ?>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Suplementos</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid imagens">
        <div class="row">
            <div class="col-md-4 text-center">
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="imagens/suplementos01.jpg" >
                        <div class="card-body">
                            <h3 class="card-text">Whey Protein 700 gr.</h3>
                            <h5> R$ 150,00</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" 
                            data-target="#whey protein">
                                COMPRAR
                            </button>
                           
  
                        </div>
                 </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="imagens/suplementos02.jpg" >
                    <div class="card-body">
                        <h3 class="card-text">Whey 100 g. sabor chocolate</h3>
                        <h5> R$ 150,00</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" 
                        data-target="#whey">
                                COMPRAR
                            </button>
                    </div>
                </div>
            </div>



            <div class="col-md-4 text-center">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="imagens/suplemento3.jpg" >
                        <div class="card-body">
                            <h3 class="card-text">Creatina 100 g</h3>
                            <h5> R$ 150,00</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" 
                            data-target="#creatina">
                                COMPRAR
                            </button>
                        </div>
                </div>
         </div>

        

         

</div>
</div>


<!-- Modal -->
<div class="modal fade" id="barras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Barras para exercícios </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="imagens/diversos01.jpg" alt="imagem capa do card">
        <p>barras para exercicios em casa.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>
 <!--modal 2-->
<div class="modal fade" id="whey" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Suplemento alimentar proteico em capsula</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="imagens/suplementos02.jpg" alt="imagem capa do card">
        <p>Suplemento alimentar sabor chocolate.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>

 <!--modal 3-->
 <div class="modal fade" id="creatina" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Creatina em pó</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="imagens/suplemento3.jpg" alt="imagem capa do card">
        <p>top,short na cor salmão.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>


    

    <?php
    require_once 'footer.php';
    ?>
