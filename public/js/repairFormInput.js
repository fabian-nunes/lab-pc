function validateRepair() {
    var errorStrings = ['<span style="color: white">O campo <span style="color: red">Nome da Reparação</span> não pode estar vazio</span>', '<span style="color: white">O campo <span style="color: red">Nome/Número do cliente</span> não pode estar vazio</span>'];

    let repairName = document.forms["repairForm"]["repairName"].value;
    let repairClient = document.forms["repairForm"]["repairClient"].value;
    let repairNumber = document.forms["repairForm"]["repairNumber"].value;

    if (repairName == " ") {
        Swal.fire({
            icon: 'error',
            title: errorStrings[0],
            width: 600,
            padding: '3em',
            background: '#2C394B',
            backdrop: `
                rgba(0,0,123,0.4)
                url("/images/nyan-cat.gif")
                left top
                no-repeat
              `
        });
        return false;
    }

    if (repairClient == " " || repairNumber == " ") {
        Swal.fire({
            icon: 'error',
            title: errorStrings[1],
            width: 600,
            padding: '3em',
            background: '#2C394B',
            backdrop: `
                rgba(0,0,123,0.4)
                url("/images/nyan-cat.gif")
                left top
                no-repeat
              `
        });
        return false;
    }
}
