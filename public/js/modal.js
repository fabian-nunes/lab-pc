$('#modalEditForm').on('show.bs.modal', function (event) {
    let id = $(event.relatedTarget).data('id');
    let nome = $(event.relatedTarget).data('name');
    let number = $(event.relatedTarget).data('number');

    document.getElementById("idD").value = id;
    document.getElementById("idE").value = id;
    document.getElementById("mName").value = nome;
    document.getElementById("mNumber").value = number;
})
