<?php
    //Conexão com banco de dados
    //Criar o objeto de conexão
    $SERVIDOR   = 'localhost';
    $USUARIO    = 'admin';
    $SENHA      = '@Luno123';
    $BANCO      = 'TI41';

    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);

    If ( $con->connect_error){
        //Aqui faz o código necessario em caso de erro durante a conexão com o banco de dados
        echo "Erro ao conectar com a base de dados";
    }else{
        echo "<h3>A conexão com o banco de dados foi realizado</h3>";

        $sql = "select *, vlunit *qtde as total from produtos";
        $total = 0;
        $ret = $con -> query($sql);

        while ($registro = $ret -> fetch_assoc()){
            //Exibe os registros retornados pelo comando SQL executado
            echo "Produto: " . $registro['produto'];
            echo " , Quantidade: " . $registro['qtde'];
            echo " , Valor Unitario: " . $registro ['vlunit'];
            echo " , Total: " . $registro ['total'];
            echo "<br> <br>";
            $total += $registro['total'];
        }
        echo "<h6>Total: $total</h6>";


        $con -> Close();
    }


?>