<?php
    require_once 'head.php';
    require_once 'menu.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Collection Gym</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid imagens">
        <div class="row">
            <div class="col-md-3 text-center">
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="imagens/lookacademia1.jpg" >
                        <div class="card-body">
                            <h3 class="card-text">conjunto primavera</h3>
                            <h5> R$ 150,00</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" 
                            data-target="#primavera">
                                COMPRAR
                            </button>
                           
  
                        </div>
                 </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="imagens/lookacademia2.jpg" >
                    <div class="card-body">
                        <h3 class="card-text">conjunto verão</h3>
                        <h5> R$ 150,00</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" 
                        data-target="#verão">
                                COMPRAR
                            </button>
                    </div>
                </div>
            </div>



            <div class="col-md-3 text-center">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="imagens/lookacademia3.jpg" >
                        <div class="card-body">
                            <h3 class="card-text">conjunto outono</h3>
                            <h5> R$ 150,00</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" 
                            data-target="#outono">
                                COMPRAR
                            </button>
                        </div>
                </div>
         </div>

         <div class="col-md-3 text-center">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="imagens/lookacademia4.jpg" >
                        <div class="card-body">
                            <h3 class="card-text">conjunto inverno</h3>
                            <h5> R$ 150,00</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" 
                            data-target="#inverno">
                                COMPRAR
                            </button>
                        </div>
                </div>
         </div>

         

</div>
</div>


<!-- Modal -->
<div class="modal fade" id="primavera" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto primavera</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="imagens/lookacademia1.jpg" alt="imagem capa do card">
        <p>conjunto vermelho marshalla.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>
  <!--modal2-->
<div class="modal fade" id="verão" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto verão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="imagens/lookacademia2.jpg" alt="imagem capa do card">
        <p>Top e calça em estampa sereia.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>

 <!--modal 3-->
 <div class="modal fade" id="outono" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto outono</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="imagens/lookacademia3.jpg" alt="imagem capa do card">
        <p>top,short na cor salmão.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>

 <!--modal 4-->
 <div class="modal fade" id="inverno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto inverno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="imagens/lookacademia4.jpg" alt="imagem capa do card">
        <p> top,calça na cor preta </P>
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