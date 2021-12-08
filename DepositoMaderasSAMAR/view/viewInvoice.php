<div class="modal fade" id="InvoiceModal" tabindex="-1" aria-labelledby="InvoiceModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        
       
            <div class="modal-content">
                <div class="modal-header headerModal">
                    <h5 class="modal-title" id="InvoiceModalLabel">Detalles del pedido</h5>
                    <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>

                   


                <div class="modal-body">

                <label for="">Numero de producto: <?php echo $vars["row"][1]->getIdProduct() ?></label>
                <hr class="border-dark">
                <label for="">Detalle del producto: <?php echo $vars['row'][1]->getDetails() ?> </label>
                <hr class="border-dark">
                <label for="">Cantidad:  <?php echo $vars['row'][1]->getQuantity() ?></label>
                <hr class="border-dark">
                <label for="">Precio unitario: 
                     <?php echo $vars['row'][1]->getTotalAmount()/$vars['row'][1]->getQuantity() ?> 
                </label>
                <hr class="border-dark">
                <label for="">Precio total sin servicios: <?php echo $vars['row'][1]->getTotalAmount().'$' ?></label>
                <hr class="border-dark">
                <label for="">Servicios:</label>
                <?php 
                    foreach($vars["row"][1]->getArray() as $services){
                ?>
                           <br> <label for=""> <?php  echo "->" .$services->getService().':'. $services->getTotalAmount().'$'?> </label>

                    <?php }?>
                <hr class="border-dark">
                <label for="">Precio total con servicios: <?php  echo $vars['row'][1]->getTotalAmount()+$vars['row'][1]->getPrice().'$' ?> </label>
               

                   
                </div>
                
            </div>
             
            
    </div>
</div>
</div>
<!-- END MODAL -->