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

    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var x = 1; //initlal text box count

    for (let i = 0; i < pecasN.length-1; i++) {
        let pecasP = pecasN[i].split("-");
        console.log(pecasN[i]);
        console.log(pecasP[1]);

        x++; //text box increment
        $(wrapper).append('<div class="form-group d-flex"> <input type="text" id="viewOrder" class="form-control rounded-left mr-4" placeholder="Preço" readonly name="mypeca['+x+']" value="'+pecasP[0]+'"/><input type="text" id="viewOrder" class="form-control rounded-left" placeholder="Preço" readonly name="myprice['+x+']" value="'+pecasP[1]+'€"/></div>'); // add input boxes.
    }
});

$('#modalViewOCForm').on('show.bs.modal', function (event) {
    let pecas = $(event.relatedTarget).data('pecas');
    let pecasN = pecas.split("#");
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var x = 1; //initlal text box count

    for (let i = 0; i < pecasN.length-1; i++) {
        let pecasP = pecasN[i].split("-");
        console.log(pecasN[i]);
        console.log(pecasP[1]);

        x++; //text box increment
        $(wrapper).append('<div class="form-group d-flex"> <input type="text" id="viewOrder" class="form-control rounded-left mr-4" placeholder="Preço" readonly name="mypeca['+x+']" value="'+pecasP[0]+'"/><input type="text" id="viewOrder" class="form-control rounded-left" placeholder="Preço" readonly name="myprice['+x+']" value="'+pecasP[1]+'€"/></div>'); // add input boxes.
    }

    let obs = $(event.relatedTarget).data('obs');
    document.getElementById("viewOrderCOBS").value = obs;
});

$('#modalCompleteOForm').on('show.bs.modal', function (event) {
    let id = $(event.relatedTarget).data('id');

    document.getElementById("completeOrderForm").action = "/encomendas/"+id;
});

$('#modalViewOForm').on('hidden.bs.modal', function (e) {
    location.reload();
});

$('#modalViewOCForm').on('hidden.bs.modal', function (e) {
    location.reload();
});
