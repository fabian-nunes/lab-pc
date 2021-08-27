function validateRepair() {
    var errorStrings = ['<span style="color: white">O campo <span style="color: red">Nome da Reparação</span> não pode estar vazio</span>',
        '<span style="color: white">O campo <span style="color: red">Nome/Número do cliente</span> não pode estar vazio</span>',
        '<span style="color: white">O campo <span style="color: red">Número do cliente</span> têm de ser válido</span>',
        '<span style="color: white">O campo <span style="color: red">Preço</span> têm de ser válido</span>',
        '<span style="color: white">O campo <span style="color: red">Peças</span> têm de ser válido</span>'];

    let repairName = document.forms["repairForm"]["repairName"].value;
    let repairClient = document.forms["repairForm"]["repairClient"].value;
    let repairNumber = document.forms["repairForm"]["repairNumber"].value;
    let repairPrice = document.forms["repairForm"]["repairPrice"].value;

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

    if (repairNumber.toString().length != 9 || !checkNumber(repairNumber)) {
        Swal.fire({
            icon: 'error',
            title: errorStrings[2],
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


    if (!checkNumber(repairPrice)) {
        Swal.fire({
            icon: 'error',
            title: errorStrings[3],
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

    let pecasReparo = "";
    if (peca > 0) {
        for (let i = 1; i <= peca; i++) {
            let piece = document.getElementById("Peca_"+i).value;
            if(piece == " ") {
                Swal.fire({
                    icon: 'error',
                    title: errorStrings[4],
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
            } else {
                let pecaO = document.getElementById("PecaO_" + i).checked;
                let valueP;
                if (pecaO) {
                    valueP = 1;
                } else {
                    valueP = 0;
                }
                pecasReparo += piece + "," + valueP + "#";
            }

        }
    }

    document.getElementById("pecas").value = pecasReparo;

}
