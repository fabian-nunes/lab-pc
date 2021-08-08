function validateContact() {
    let name = document.forms["contactF"]["cName"].value;
    let number = document.forms["contactF"]["cNumber"].value;
    if (name == "") {
        Swal.fire({
            icon: 'error',
            title: '<span style="color: white">O campo <span style="color: red">Nome</span> não pode estar vazio</span>',
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
    } else if (number == "") {
        Swal.fire({
            icon: 'error',
            title: '<span style="color: white">O campo <span style="color: red">NºTelemóvel</span> não pode estar vazio</span>',
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

    if (number.toString().length != 9) {
        Swal.fire({
            icon: 'error',
            title: '<span style="color: white">O campo <span style="color: red">NºTelemóvel</span> têm de ser válido</span>',
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

function validateEContact() {
    let name = document.forms["contactFE"]["cNameE"].value;
    let number = document.forms["contactFE"]["cNumberE"].value;
    if (name == "") {
        Swal.fire({
            icon: 'error',
            title: '<span style="color: white">O campo <span style="color: red">Nome</span> não pode estar vazio</span>',
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
    } else if (number == "") {
        Swal.fire({
            icon: 'error',
            title: '<span style="color: white">O campo <span style="color: red">NºTelemóvel</span> não pode estar vazio</span>',
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

    if (number.toString().length != 9) {
        Swal.fire({
            icon: 'error',
            title: '<span style="color: white">O campo <span style="color: red">NºTelemóvel</span> têm de ser válido</span>',
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

function validateOrder() {

    if (inputError) {
        Swal.fire({
            icon: 'error',
            title: '<span style="color: white">O campo <span style="color: red">Preço</span> não pode estar vazio</span>',
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

    let number = document.forms["contactFO"]["oPrice"].value;
    if (number == "") {
        Swal.fire({
            icon: 'error',
            title: '<span style="color: white">O campo <span style="color: red">Preço</span> não pode estar vazio</span>',
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

    if (!checkNumber(number)) {
        Swal.fire({
            icon: 'error',
            title: '<span style="color: white">O campo <span style="color: red">Preço</span> não pode conter letras</span>',
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


function validateOrderE() {
    let number = document.forms["contactFE"]["oPriceE"].value;
    if (number == "") {
        Swal.fire({
            icon: 'error',
            title: '<span style="color: white">O campo <span style="color: red">Preço</span> não pode estar vazio</span>',
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

    if (!checkNumber(number)) {
        Swal.fire({
            icon: 'error',
            title: '<span style="color: white">O campo <span style="color: red">Preço</span> não pode conter letras</span>',
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
