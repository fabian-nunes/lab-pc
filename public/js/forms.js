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
