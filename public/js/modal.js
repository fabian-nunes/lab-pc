$('#modalEditForm').on('show.bs.modal', function (event) {
    let id = $(event.relatedTarget).data('id');
    let nome = $(event.relatedTarget).data('name');
    let number = $(event.relatedTarget).data('number');

    document.getElementById("idD").value = id;
    document.getElementById("idE").value = id;
    document.getElementById("mName").value = nome;
    document.getElementById("mNumber").value = number;
});

$('#modalViewOForm').on('show.bs.modal', function (event) {
    let id = $(event.relatedTarget).data('id');
    document.getElementById("idDO").value = id;

    let pecas = $(event.relatedTarget).data('pecas');
    let pecasN = pecas.split("#");
    document.getElementById("viewOrder").value = "";
    for (let i = 0; i < pecasN.length-1; i++) {
        let pecasP = pecasN[i].split("-");
        console.log(pecasN[i]);
        console.log(pecasP[1]);
        document.getElementById("viewOrder").value += "-> Peça: " + pecasP[0] + "  Preço: " + pecasP[1] +" €\n";
    }
});

$('#modalCompleteOForm').on('show.bs.modal', function (event) {
    let id = $(event.relatedTarget).data('id');

    document.getElementById("completeOrderForm").action = "/encomendas/"+id;
});

