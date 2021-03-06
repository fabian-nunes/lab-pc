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

    <h1>Encomendas<a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalAddOForm"><button class="bn632-hover bn18 roundC"><i class="fas fa-plus" style="font-size: 30px"></i></button></a></h1>
    <h3 class="text-center text-white">Por receber</h3>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table">

                    <div class="row header">
                        <div class="cell">
                            NºEncomenda
                        </div>
                        <div class="cell">
                            Preço €
                        </div>
                        <div class="cell">
                            Data
                        </div>
                        <div class="cell">
                            Completar
                        </div>
                    </div>

                    @foreach($orders as $order)
                        <div class="row">
                            <div class="cell" data-title="ID" data-toggle="modal" data-target="#modalViewOForm" data-id="{{$order->id}}" data-pecas="{{$order->pecas}}">
                                {{$order->id}}
                            </div>
                            <div class="cell" data-title="Preço €" data-toggle="modal" data-target="#modalViewOForm" data-id="{{$order->id}}" data-pecas="{{$order->pecas}}">
                                {{$order->preco}} €
                            </div>
                            <div class="cell" data-title="Data" data-toggle="modal" data-target="#modalViewOForm" data-id="{{$order->id}}" data-pecas="{{$order->pecas}}">
                                {{$order->created_at->format('d-m-Y')}}
                            </div>
                            <div class="cell" data-title="Completar">
                                <a class="bn31" href="" data-toggle="modal" data-target="#modalCompleteOForm" data-id="{{$order->id}}"><span class="bn31span"><i class="fas fa-check"></i></span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        {{$orders->appends(['ordersR' => $ordersR->currentPage()])->links()}}
    </div>

    <br><br><br>

    <h3 class="text-center text-white">Recebidas</h3>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table">

                    <div class="row header">
                        <div class="cell">
                            NºEncomenda
                        </div>
                        <div class="cell">
                            Preço €
                        </div>
                        <div class="cell">
                            Data
                        </div>
                        <div class="cell">
                            Entrega
                        </div>
                    </div>

                    @foreach($ordersR as $orderR)
                        <div class="row">
                            <div class="cell" data-title="ID" data-toggle="modal" data-target="#modalViewOCForm" data-id="{{$orderR->id}}" data-pecas="{{$orderR->pecas}}" data-obs="{{$orderR->obs}}">
                                {{$orderR->id}}
                            </div>
                            <div class="cell" data-title="Preço €" data-toggle="modal" data-target="#modalViewOCForm" data-id="{{$orderR->id}}" data-pecas="{{$orderR->pecas}}" data-obs="{{$orderR->obs}}">
                                {{$orderR->preco}} €
                            </div>
                            <div class="cell" data-title="Data" data-toggle="modal" data-target="#modalViewOCForm" data-id="{{$orderR->id}}" data-pecas="{{$orderR->pecas}}" data-obs="{{$orderR->obs}}">
                                {{$orderR->created_at->format('d-m-Y')}}
                            </div>
                            <div class="cell" data-title="Completar">
                                {{$orderR->updated_at->format('d-m-Y')}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        {{$ordersR->appends(['orders' => $orders->currentPage()])->links()}}
    </div>
</section>


<div class="modal fade" id="modalAddOForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                    <ion-icon name="close-circle-outline" color="danger" size="large"></ion-icon>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <div class="icon d-flex align-items-center justify-content-center">
                    <ion-icon name="archive" color="danger"></ion-icon>
                </div>
                <h3 class="text-center mb-4 text-white">Adicionar Encomenda</h3>
                <form name="contactFO" x-data="handler()" action="/encomendas" class="login-form" onsubmit="return validateOrder()" method="POST">
                    @csrf
                    <template class="form-group" x-for="(field, index) in fields" :key="index">
                        <tr>
                            <td x-text="index + 1"></td>
                            <td><input x-model="field.name" onkeydown="checkKey()" type="text" name="name[]" class="form-control" placeholder="Nome" required></td>
                            <td><input x-model="field.price" onkeypress="return isNumberKey(this, event);" type="text" name="price[]" class="form-control" placeholder="Preço" required></td>
                            <td>
                                <button type="button" class="btn btn-danger btn-small" @click="removeField(index)">&times;</button>
                            </td>
                        </tr>
                    </template>
                    <div class="form-group text-center">
                        <button type="button" class="form-control btn btn-primary rounded submit px-3" @click="addNewField()">Adicionar Peça</button>
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="total" name="total">
                        <input type="hidden" id="priceT" name="priceT">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3" @click="saveForm()">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalViewOForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <form name="contactF" action="/encomendas" class="login-form" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <button type="submit"  class="d-flex align-items-center justify-content-center mt-1">
                            <input type="hidden" name="idDO" id="idDO">
                            <ion-icon name="trash" color="danger" size="large"></ion-icon>
                        </button>
                    </div>
                </form>
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                    <ion-icon name="close-circle-outline" color="danger" size="large"></ion-icon>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <div class="icon d-flex align-items-center justify-content-center">
                    <ion-icon name="archive" color="danger"></ion-icon>
                </div>
                <h3 class="text-center mb-4 text-white">Encomenda <span id="idOrder"></span></h3>
                <form name="contactFOV" action="/encomendas" class="login-form">
                    <div class="input_fields_wrap">
                        <div class="form-group d-flex">
                            <input type="text" id="viewOrder" class="form-control rounded-left" placeholder="Preço" readonly name="mytext[1]" hidden>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalViewOCForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                    <ion-icon name="close-circle-outline" color="danger" size="large"></ion-icon>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <div class="icon d-flex align-items-center justify-content-center">
                    <ion-icon name="archive" color="danger"></ion-icon>
                </div>
                <h3 class="text-center mb-4 text-white">Encomenda <span id="idOrder"></span></h3>
                <form name="contactFOV" action="/encomendas" class="login-form">
                    <div class="input_fields_wrap">
                        <div class="form-group d-flex">
                            <input type="text" id="viewOrder" class="form-control rounded-left" placeholder="Preço" readonly name="mytext[1]" hidden>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <textarea type="text" id="viewOrderCOBS" class="form-control rounded-left" placeholder="Preço" readonly></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCompleteOForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center mt-1" data-dismiss="modal" aria-label="Close">
                    <ion-icon name="close-circle-outline" color="danger" size="large"></ion-icon>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <div class="icon d-flex align-items-center justify-content-center">
                    <ion-icon name="archive" color="danger"></ion-icon>
                </div>
                <h3 class="text-center mb-4 text-white">Confirmar Encomenda</h3>
                <form name="contactFE" action="/encomendas" id="completeOrderForm" class="login-form" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <textarea id="oObs" name="oObs" class="form-control rounded-left" placeholder="Observações Adicionais"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sim</button>
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
<script src="//unpkg.com/alpinejs" defer></script>

<script type="text/javascript" src="js/table.js"></script><!-- jQuery -->
<script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript" src="js/forms.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
<script type="text/javascript" src="js/dynamicInput.js"></script>

</html>
