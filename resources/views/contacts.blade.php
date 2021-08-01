<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Contactos</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/contacts.css" />
    <link rel="stylesheet" href="css/modal.css" />
</head>
<body>

<div class="containerN blue circleBehind">
    <a class="effect">REPARAÇÕES</a>
    <a href="index.html" class="effectI"><img src="images/logoN.png" alt=""></a>
    <a class="effect">MATERIAL</a>
</div>

<section>
    <!--for demo wrap-->
    <h1>Contactos</h1>
    <div class="tbl-header table-responsive">
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data</th>
                <th>Vizualizar</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table>
            <tbody>
            <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td><a class="bn39" href="/"><span class="bn39span">Button</span></a></td>
                <td><a class="bn39" href="/"><span class="bn39span">Button</span></a></td>
                <td><a class="bn39" href="/"><span class="bn39span">Button</span></a></td>
            </tr>
            </tbody>
        </table>
    </div>
</section>

<div class="d-flex justify-content-center">
    <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalAddForm"><button class="bn632-hover bn18">Adicionar</button></a>
</div>


<div class="modal fade" id="modalAddForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                    <ion-icon name="close-circle-outline" color="danger"></ion-icon>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <div class="icon d-flex align-items-center justify-content-center">
                    <ion-icon name="person" color="danger"></ion-icon>
                </div>
                <h3 class="text-center mb-4 text-white">Adicionar Contacto</h3>
                <form action="#" class="login-form">
                    <div class="form-group">
                        <input type="text" class="form-control rounded-left" placeholder="Nome">
                    </div>
                    <div class="form-group d-flex">
                        <input type="number" class="form-control rounded-left" placeholder="Nº Telemóvel">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

<!-- JS -->
<script type="text/javascript" src="js/table.js"></script><!-- jQuery -->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/571726e370.js" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>
