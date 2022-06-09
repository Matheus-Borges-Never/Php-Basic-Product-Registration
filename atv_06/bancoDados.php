<?php
    //Conexão com banco de dados
    //Criar o objeto de conexão
    $SERVIDOR   = 'localhost';
    $USUARIO    = 'admin';
    $SENHA      = '@Luno123';
    $BANCO      = 'TI41';

    $produto       = $_GET['txtProduto'];
    $quantidade       = $_GET['txtQuan'];
    $valorunit      = $_GET['txtValor'];

    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);

    If ( $con->connect_error){
        //Aqui faz o código necessario em caso de erro durante a conexão com o banco de dados
        echo "Erro ao conectar com a base de dados";
    }else{
        echo "<h3>A conexão com o banco de dados foi realizado</h3>";

        $sql = "insert into produtos (produto,qtde, vlunit) values ('$produto ','$quantidade','$valorunit')";
        $ret = $con -> query($sql);

        if($ret == true){
            echo "Registro inserido";
        }


        $con -> Close();
    }


?>