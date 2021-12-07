<div class="modal fade" id="InvoiceModal" tabindex="-1" aria-labelledby="InvoiceModalLabel" aria-hidden="false">
    <div class="modal-dialog">
       
       
            <div class="modal-content">
                <div class="modal-header headerModal">
                    <h5 class="modal-title" id="InvoiceModalLabel">Agregar extras</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>



                <div class="modal-body">

                
                
                <label for="">Cantidad</label>    
                <div>
                    <button>Más</button>
                    <input name="quantity" type="text" value="1">
                    <button>Menos</button>
                </div>

                <label for="">Servicios</label>
                <div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox"  name="Cepillado" value="4" id="Cepillado">
                    <label class="form-check-label" value="1"> Cepillado</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="6" name="Moldedura" id="Moldedura">
                    <label class="form-check-label" value="1" > Moldedura</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="7" name="Tablilla" id="Tablilla" >
                    <label class="form-check-label" >Tablilla</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="5" name="Transporte" id="Transporte" >
                    <label class="form-check-label" >Transporte</label>
                    </div>
                </div>
               

                   
                </div>
                <div class="modal-footer headerModal">
                    <button id="btnInsert" type="submit" class="btn btn-secondary">Agregar</button>
                </div>
            </div>
       
       
    </div>
</div>
</div>
<!-- END MODAL -->