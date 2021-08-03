<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Encomendas</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/contacts.css" />
    <link rel="stylesheet" href="css/buttons.css" />
    <link rel="stylesheet" href="css/modal.css" />
    <link rel="stylesheet" href="css/table.css" />
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

    <h1>Encomendas<a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalAddForm"><button class="bn632-hover bn18 roundC"><i class="fas fa-plus" style="font-size: 30px"></i></button></a></h1>

    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table">

                    <div class="row header">
                        <div class="cell">
                            ID
                        </div>
                        <div class="cell">
                            Nome
                        </div>
                        <div class="cell">
                            Data
                        </div>
                        <div class="cell">
                            Editar
                        </div>
                    </div>

                    @foreach($contacts as $contact)
                        <div class="row">
                            <div class="cell" data-title="ID">
                                {{$contact->id}}
                            </div>
                            <div class="cell" data-title="Nome">
                                {{$contact->nome}}
                            </div>
                            <div class="cell" data-title="Numero">
                                {{$contact->numero}}
                            </div>
                            <div class="cell" data-title="Editar">
                                <a class="bn39" href="" data-toggle="modal" data-target="#modalEditForm" data-id="{{$contact->id}}"
                                   data-name="{{$contact->nome}}" data-number="{{$contact->numero}}"><span class="bn39span">Editar</span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<div class="d-flex justify-content-center">
    {!! $contacts->links() !!}
</div>

<div class="modal fade" id="modalAddForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                    <ion-icon name="close-circle-outline" color="danger" size="large"></ion-icon>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <div class="icon d-flex align-items-center justify-content-center">
                    <ion-icon name="person" color="danger"></ion-icon>
                </div>
                <h3 class="text-center mb-4 text-white">Adicionar Contacto</h3>
                <form name="contactF" action="/contactos" class="login-form" onsubmit="return validateContact()" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="cName" class="form-control rounded-left" placeholder="Nome">
                    </div>
                    <div class="form-group d-flex">
                        <input type="number" name="cNumber" class="form-control rounded-left" placeholder="Nº Telemóvel">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <form name="contactF" action="/contactos" class="login-form" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <button type="submit"  class="d-flex align-items-center justify-content-center mt-1">
                            <input type="hidden" name="idC" id="idD">
                            <ion-icon name="trash" color="danger" size="large"></ion-icon>
                        </button>
                    </div>
                </form>
                <button type="button" class="close d-flex align-items-center justify-content-center mt-1" data-dismiss="modal" aria-label="Close">
                    <ion-icon name="close-circle-outline" color="danger" size="large"></ion-icon>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <div class="icon d-flex align-items-center justify-content-center">
                    <ion-icon name="person" color="danger"></ion-icon>
                </div>
                <h3 class="text-center mb-4 text-white">Editar Contacto</h3>
                <form name="contactFE" action="/contactos" class="login-form" onsubmit="return validateEContact()" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input type="text" name="cNameE" id="mName" class="form-control rounded-left" placeholder="Nome">
                    </div>
                    <div class="form-group d-flex">
                        <input type="number" name="cNumberE" id="mNumber" class="form-control rounded-left" placeholder="Nº Telemóvel">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="idC" id="idE">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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

<script type="text/javascript" src="js/table.js"></script><!-- jQuery -->
<script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript" src="js/forms.js"></script>
<script type="text/javascript" src="js/modal.js"></script>

</html>
