(function () {
    $.ajax({
        url:'servicios/productos/get_all_products.php',
        type:'POST',
        data:{},
        success:function(data){
            console.log(data);
            let listaArticulos = '';
            for (let i = 0; i < data.datos.length; i++) {
                listaArticulos+= `<div class="four columns">
                <div class="card">
                    <img src="img-workpaper/${data.datos[i].fotoart}" class="u-full-width">
                    <div class="info-card">
                        <h4>${data.datos[i].descripcion}</h4>
                        <p>${data.datos[i].marca}</p>
                        <img src="img-workpaper/estrellas.png">
                        <p class="precio">`+formatoPrecio(data.datos[i].precioLista)+`<span class="u-pull-right">$ ${data.datos[i].precioUnit}</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito">Agregar Al Carrito</a>
                    </div>
                </div>
                </div>`
            }
            document.getElementById("space-list").innerHTML=listaArticulos;
        }
    });
})();
function formatoPrecio(promo) {
    let valor=parseFloat(promo);
    if (valor > 0) {
        return valor;
    } else {
        return '';
    }
}