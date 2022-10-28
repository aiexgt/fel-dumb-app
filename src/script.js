$("#add").click(()=>{
    $("#exampleModal").modal("show");
})

function agregar(){
    $("#filaOculta").removeAttr("hidden");
    $("#resultadoTotal").html("Q.6,599.00")
    $("#exampleModal").modal("hide");
}