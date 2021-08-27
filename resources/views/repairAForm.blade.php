<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Reparações</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/contacts.css" />
    <link rel="stylesheet" href="css/buttons.css" />
    <link rel="stylesheet" href="css/modal.css" />
    <link rel="stylesheet" href="css/table.css" />
    <link rel="stylesheet" href="css/repairForm.css" />
    <link rel="stylesheet" href="css/util.css" />


    <link rel="stylesheet" href="css/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/select2.min.css" />
    <link rel="stylesheet" href="css/animate.css" />


</head>
<body>

<div class="containerN blue circleBehind">
    <a class="effect">REPARAÇÕES</a>
    <a href="/" class="effectI"><img src="images/logoN.png" alt=""></a>
    <a href="/contactos" class="effect">CONTACTOS</a>
</div>

<section>
    <div class="container h-100">
        <div class="d-flex justify-content-center">
            <div class="card mt-5 col-md-4 animated bounceInDown myForm">
                <div class="card-header">
                    <h4>Adicionar Reparação</h4>
                </div>
                <div class="card-body">
                    <form name="repairForm" action="/repairAdd" onsubmit="return validateRepair()" method="POST">
                        @csrf
                        <div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text br-15"><i class="fas fa-tools"></i></span>
                                </div>
                                <input type="text" placeholder="Nome Da Reparação" class="form-control" name="repairName" required/>
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text br-15"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" placeholder="Nome" class="form-control" name="repairClient" required/>
                                &emsp;
                                <div class="input-group-prepend">
                                    <span class="input-group-text br-15"><i class="fas fa-phone-square"></i></span>
                                </div>
                                <input type="text" placeholder="Número" class="form-control" name="repairNumber" required/>
                            </div>
                        </div>
                        <div id="dynamic_container">

                        </div>
                        <br>
                        <div>
                            <a class="btn btn-secondary btn-sm" id="add_more"><i class="fas fa-plus-circle"></i> Adicionar Peça</a>
                            <a class="btn btn-secondary btn-sm" id="remove_more"><i class="fas fa-trash-alt"></i> Remover Peça</a>
                        </div>
                        <div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text br-15"><i class="fas fa-pen"></i></span>
                                </div>
                                <textarea type="text" placeholder="Observações" name="repairObs" class="form-control"></textarea>
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text br-15"><i class="fas fa-euro-sign"></i></span>
                                </div>
                                <input type="text" placeholder="Preço" name="repairPrice" class="form-control"/>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <input type="text" name="pecas" id="pecas" hidden>
                            <input type="submit" class="btn btn-success btn-sm submit_btn" value="Submeter">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

</body>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/571726e370.js" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//unpkg.com/alpinejs" defer></script>



<script type="text/javascript" src="js/table.js"></script><!-- jQuery -->
<script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript" src="js/forms.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
<script type="text/javascript" src="js/dynamicInput.js"></script>
<script type="text/javascript" src="js/repairForm.js"></script>
<script type="text/javascript" src="js/repairFormInput.js"></script>
</html>
