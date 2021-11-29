//Función de Ajax para guardar productos en el carrito
function addProductCart(productId, cuantity) {
    var parameters = {
        "productId": productId,
        "cuantity": cuantity
    };
    $.ajax
            (
                    {
                        data: parameters,
                        url: '?controlador=Products&accion=addProductCart',
                        type: 'post',
                        success: function (response)
                        {
                            alert(response);
                        }
                    }
            );
}//Fin addProductCart

//Función Datatable
$(document).ready(function () {
 //   $('#example').DataTable();
});
//Función datatable


