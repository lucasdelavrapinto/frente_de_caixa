<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:500&display=swap');
    .navbar, .page-footer, main {
        padding-left: 0;
    }
    .div_valor{
        padding-top: 10%;
    }
    .valor{
        font: poppins;
        font-size: 40px;
        margin: auto;
        width: 70%;
        padding: 20px;
    }
    .valor2{
        font: 39px poppins;
    }
    .my-custom-scrollbar {
        position: relative;
        height: 400px;
        overflow: auto;
    }
        .table-wrapper-scroll-y {
        display: block;
    }



  </style>
</head>

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
          <strong class="blue-text">MDB</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link border border-light rounded waves-effect"
                target="_blank">
                <i class="fab fa-github mr-2"></i>MDB GitHub
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <!-- <div class="sidebar-fixed position-fixed">

      <a class="logo-wrapper waves-effect">
        <img src="https://mdbootstrap.com/img/logo/mdb-email.png" class="img-fluid" alt="">
      </a>

      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Profile</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Tables</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-map mr-3"></i>Maps</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Orders</a>
      </div>

    </div> -->
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">
          <h4 class="mb-2 mb-sm-0 pt-1">
            <span><button type="button" class="btn btn-cyan">Menu Incial</button></span>
            <span><button type="button" class="btn btn-indigo">Consultar Produto (F2)</button></span>
            <span><button type="button" class="btn btn-indigo">Clientes (F3)</button></span>
            <span><button type="button" class="btn btn-indigo">Pagamentos (F4)</button></span>
          </h4>

          <form class="d-flex justify-content-center">
            <!-- Default input -->
            <input type="search" placeholder="Buscar Venda" aria-label="Search" class="form-control">
            <button class="btn btn-primary btn-sm my-0 p" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>

      </div>
      <!-- Heading -->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
                <div class="row col-md-12">
                    <label for="">Produto</label>
                    <input type="text" id="input_produtos" autocomplete="off" name="input_produtos" class="form-control" placeholder="Pesquisar código do produto" autofocus>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('/img/default.png')}}" alt="" heigth="100px" width="300px">
                    </div>
                    <div class="div_valor col-md-6" align="center">
                        <p id="valor" class="valor"></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Quantidade</label>
                        <input type="number" id="input_quantidade" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-3">
                        <label for="">Desconto</label>
                        <input type="text" id="input_desconto" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-3">
                        <label for="">Valor Unitário</label>
                        <input type="text" id="input_valor_unitario" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-3">
                        <label for="">Sub Total</label>
                        <input type="text" id="input_sub_total" class="form-control" placeholder="" readonly>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-6"></div>
                    <div class="form-group col-md-6">
                        <button id="btn_inserir_produto" type="button" class="btn btn-deep-purple btn-lg btn-block">Inserir Produto</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-unique btn-lg btn-block">Cancelar Venda</button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-dark-green btn-lg btn-block">Salvar Venda</button>
                    </div>
                </div>

            </div>
          </div>
        </div>

        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Qtde</th>
                        <th scope="col">Preço Unit</th>
                        <th scope="col">Sub Total</th>
                        <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td><button type="button" class="btn btn-danger btn-sm">Deletar</button></td>
                        </tr>



                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <h5 class="card-header h5">Resumo da Venda</h5>
            <div class="card-body " align="right">
                <p class="valor2">R$ 300,00</p>
                <hr>
                <a href="#!" class="btn btn-primary">Concluir Venda</a>
            </div>
        </div>


          </div>
        </div>

      </div>
    </div>
  </main>

  <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">
  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0-rc.2/jquery-ui.js'></script>

  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    // new WOW().init();

    $("#btn_inserir_produto").hide();

    var data = [
        {label:"HTML", id:1, preco:49.90},
        {label:"CSS", id:2, preco:19.90},
        {label:"Laravel", id:3, preco:9.90},
        {label:"SQL", id:4, preco:1499.00},
        {label:"PHP", id:5, preco:2149.90},
    ];

  </script>

  <script>
      $(document).ready(function (){
        function resetCampos(){
          $("input[name='input_produtos']").val("");
          $("#input_quantidade").val("");
          $("#input_desconto").val("");
          $("#input_valor_unitario").val("");
          $("#input_sub_total").val("");
        }
        resetCampos();


        var produto = {
          label: null,
          preco: null,
          quantidade: null,
          desconto: null,
          vlr_unit: null,
          sub_total: null
        }

        function verificaProduto(){
            if ($("#input_produtos").val()) {
                $("#btn_inserir_produto").show('slow');
            }else{
                $("#btn_inserir_produto").hide(2000);
            }
        };

        function formatarPreco(valor){
            var f = valor.toLocaleString('pt-br', {minimumFractionDigits: 2});
            return f;
        }

        $( "#input_produtos" ).autocomplete({
            minLength: 0,
            source: data,
            focus: function( event, ui ) {
                return false;
            },
            select: function( event, ui ) {

                $( "#valor" ).html('R$ '+ formatarPreco(ui.item.preco));
                $( "#input_quantidade" ).val(1);
                $( "#input_desconto" ).val(0);
                $( "#input_valor_unitario" ).val(ui.item.preco);
                $( "#input_sub_total" ).val(1);

                var quantidade = $( "#input_quantidade" ).val();
                var desconto = $( "#input_desconto" ).val();
                var valor_unitario = $( "#input_valor_unitario" ).val();

                $("#input_produtos").val(ui.item.label);

                label = ui.item.label,
                preco = ui.item.preco,
                quantidade = parseInt(quantidade),
                desconto = parseInt(desconto),
                vlr_unit = parseFloat(valor_unitario),

                verificaProduto();

                changeMyProduct(label, preco, quantidade, desconto, vlr_unit);

                $( "#input_quantidade" ).focus();




                return false;
            }
        });

        function changeMyProduct(label, preco, qtd, desconto, vlr_unit){
            produto.label = label;
            produto.preco = preco;
            produto.quantidade = parseInt(qtd);
            produto.desconto = parseInt(desconto);
            produto.vlr_unit = parseFloat(vlr_unit);
            produto.sub_total = produto.quantidade * parseFloat(produto.vlr_unit);
            $("#input_sub_total").val(produto.sub_total);
            // console.log(produto);
        }

        $("#input_quantidade").change(function () {
            label = produto.label;
            preco = produto.preco;
            qtd = parseInt($(this).val());
            desconto = produto.desconto;
            vlr_unit = produto.vlr_unit;
            changeMyProduct(label, preco, qtd, desconto, vlr_unit);
        });

        $("#input_valor_unitario").change(function () {
            label = produto.label;
            preco = produto.preco;
            qtd   = produto.quantidade;
            desconto = produto.desconto;
            vlr_unit = parseFloat($(this).val());
            changeMyProduct(label, preco, qtd, desconto, vlr_unit);
        });

        var carrinho = new Array();
        function saveCarrinho(){
          var meuproduto = {
            label: produto.label,
            preco: produto.preco,
            quantidade: parseInt(produto.quantidade),
            desconto: parseInt(produto.desconto),
            vlr_unit: parseFloat(produto.vlr_unit),
            sub_total: produto.quantidade * produto.vlr_unit
          }
          carrinho.push(meuproduto);
          console.log(carrinho);
          resetCampos();
          $("#input_produtos").focus();
        }

        $("#btn_inserir_produto").click(function (){
          saveCarrinho();
        });

    });





  </script>
</body>
</html>
