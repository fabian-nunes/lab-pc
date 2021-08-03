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
    let price = $(event.relatedTarget).data('price');
    let Sdate = $(event.relatedTarget).data('create');
    let obs = $(event.relatedTarget).data('obs');

    document.getElementById("idOrder").value = id;
    document.getElementById("oVPrice").value = price;
    document.getElementById("oVDate").value = Sdate;
    document.getElementById("oVObs").value = obs;
});

$('#modalCompleteOForm').on('show.bs.modal', function (event) {
    let id = $(event.relatedTarget).data('id');

    document.getElementById("completeOrderForm").action = "/encomendas/"+id;
});

$('#modalEditOForm').on('show.bs.modal', function (event) {
    let id = $(event.relatedTarget).data('id');
    let price = $(event.relatedTarget).data('price');
    let obs = $(event.relatedTarget).data('obs');

    document.getElementById("idOE").value = id;
    document.getElementById("idDO").value = id;
    document.getElementById("oPriceE").value = price;
    document.getElementById("oObsE").value = obs;
});
