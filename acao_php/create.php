<?php
    require_once "conexao.php";

    

        $email = $_POST["email"];
        $senha = $_POST["senha"];
    
        $sql = "INSERT INTO login(email, senha) VALUES ('$email','$senha');";
    
        echo $sql;

        if(mysql_query($sql,$con)){
            $msg = "Gravado com sucesso!";
        }else{
            $msg = "Erro ao gravar!";
        }
        mysql_close($con);
    ?>


