<?php
  require_once 'head.php';
  require_once 'menu.php';
  ?>

''
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Collection Gym</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid imagens">
        <div class="row">
            <div class="col-md-3">
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="imagens/diversos01.jpg" >
                        <div class="card-body">
                            <h3 class="card-text">Barras rolantes</h3>
                            <h5> R$ 99,00</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" 
                            data-target="#barras">
                                COMPRAR
                            </button>
                           
  
                        </div>
                 </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="imagens/diversos02.jpg" >
                    <div class="card-body">
                        <h3 class="card-text"> Conjunto garrafas</h3>
                        <h5> R$ 150,00</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" 
                        data-target="#garrafas">
                                COMPRAR
                            </button>
                    </div>
                </div>
            </div>



            <div class="col-md-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="imagens/diversos03.jpg" >
                        <div class="card-body">
                            <h3 class="card-text">Cama Elastíca</h3>
                            <h5> R$ 250,00</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" 
                            data-target="#cama">
                                COMPRAR
                            </button>
                        </div>
                </div>
         </div>

         <div class="col-md-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="imagens/diversos04.jpg" >
                        <div class="card-body">
                            <h3 class="card-text">Cama Elastíca</h3>
                            <h5> R$ 250,00</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" 
                            data-target="#jumpp">
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
  <!--modal2-->
<div class="modal fade" id="garrafas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto de garrafas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="imagens/diversos02.jpg" alt="imagem capa do card">
        <p>Conjunto de garrafas na cor lílas.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>

 <!--modal 3-->
 <div class="modal fade" id="cama" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cama Elastíca</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="imagens/diversos03.jpg" alt="imagem capa do card">
        <p>Cama Elastica para jump.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>

 <!--modal 4-->
 <div class="modal fade" id="jumpp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Trampolim jumpp</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="imagens/diversos04.jpg" alt="imagem capa do card">
        <p> Trampolim jumpp oxer aço. </P>
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
