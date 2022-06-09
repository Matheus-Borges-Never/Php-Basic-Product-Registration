<html>
    <head>
        <title>Banco de Dados</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        
        
    </head>

    <h1 style="text-align: center;">Pagina para entrada de dados</h1>
    <hr />

    <!-- Para entrada de dados podemos utilizar um formulário -->

    <form action="bancoDados.php" >
        <div class="row" >
            <div class="col-4" style="margin-left: 5%;">
                <input type="text" class="form-control" placeholder="Nome do Produto" name="txtProduto" aria-label="Name" />
            </div>
                <br>
            <div class="col-2">
                <input type="text" class="form-control" placeholder="Quantidade" name="txtQuan" aria-label="Quantidade"/>
            </div>
                <br>
            <div class="col-2">
                <input type="text" class="form-control" placeholder="Valor Unitário" name="txtValor" aria-label="Valor"/>
            </div>
                <br>
            <div class="col-12" style="margin-left: 5%; margin-top: 2vh;">
                <input class="btn btn-primary" type="submit" value="Enviar" />
                <a class="btn btn-primary" href="/site/atv_06/mostrarDados.php" role="button">Ver Dados</a>

            </div>
        </div>
    </form>

</html>