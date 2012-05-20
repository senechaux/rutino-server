$(document).ready(function() {
    ocultarFiltros();
});

function mostrarFiltros(){
  $("#aviso_filtros").remove();
  
  $("div#sf_admin_bar")
  .prepend(
    $("<div/>")
    .attr('id', 'aviso_filtros')
    .append(
        $("<a/>")
        .bind('click', function() {
            ocultarFiltros();
        })
        .attr("href", "javascript:void(0);")
        .text("Filtros [-]")
    )
  );
  $("div.sf_admin_filter").fadeIn();
}

function ocultarFiltros(){
  $("#aviso_filtros").remove();
  
  $("div#sf_admin_bar")
  .prepend(
    $("<div/>")
    .attr('id', 'aviso_filtros')
    .append(
        $("<a/>")
        .bind('click', function() {
            mostrarFiltros();
        })
        .attr("href", "javascript:void(0);")
        .text("Filtros [+]")
    )
  );
  $("div.sf_admin_filter").fadeOut();
  avisoFiltro();
}

function avisoFiltro(){
    if(tieneFiltro()){
        $("#aviso_filtros")
        .append(
            $("<img/>")
            .attr("src", "/sf/sf_admin/images/error.png")
            .attr("alt", "Aviso!")
            .attr("style", "vertical-align: bottom; margin: 0 3px;")
            )
        .append(
            $("<span/>")
            .text("Hay filtros aplicados")
            )
    }
}

function tieneFiltro(){
    var resultado = false;

    $("div.sf_admin_filter input[type=text]")
    .each(
        function(i, item){
            if(item.value != ""){
//                alert(item.name + " - " + item.value);
                resultado = true;
            }
        }
        );
    $("div.sf_admin_filter select")
    .each(
        function(i, item){
            if(item.value != ""){
//                alert(item.name + " - " + item.value);
                resultado = true;
            }
        }
        );
    return resultado;
}