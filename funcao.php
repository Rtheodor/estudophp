<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcções PHP</title>
</head>
<body>
    <?php
   $codigo = "Curso PHP";
   $retorno_dados_funcao = promocao($codigo);
    echo $retorno_dados_funcao."<br>";
   
 
    function promocao($valor = null){
        echo "Acessou a função<br>";
        echo "Parametro: $valor<br>";
        if($valor == "Curso PHP"){
            //echo "Codigo valido <br>";
            $msg = "Codigo valido.";
        }else{
            //echo"Codigo invalido";
            $msg = "Codigo invalido.<br>";
        }
        return $msg;
    }
    /*echo "<hr>";
    $promocao_doida = "Curso PHy";
    $retorna_dados = promocao($promocao_doida);
    echo $retorna_dados. "<br>";*/
 
    echo "<hr>";
 
    $codigo_curso = "Curso PHP";
     $retorno_dados_funcao = promocao($codigo_curso);
     echo $retorno_dados_funcao."<br>";
 
    echo "<hr>";
    $codigo_curso = "cursoPHP";
    $retorno_dados_funcao = promocao();
    echo $retorno_dados_funcao . "<br>";
 
 
    //Exercicios Funcao

    echo"<hr><h2>Execicios de funcao </h2>";

    $codigao = 1;
    $mula_sem_cabeça = verificar_status($codigao);
    echo $mula_sem_cabeça ."<br>";
    echo"<hr>";
    
    
    function verificar_status($real_nota){
        echo "Acessou a função case <br>";
        echo "Parametro: $real_nota";
        if($real_nota == 1){
            //echo "Codigo valido <br>";
            $msg = " Aguardando pagamento";
        }elseif($real_nota == 2){
            //echo"Codigo invalido";
            $msg = " Pago.";
        }elseif($real_nota == 3){
            $msg = " Em transporte";
        }elseif($real_nota == 4){
            $msg = " Entregue";
        }else{
            $msg = " Codigo invalido";
        }
        return $msg;
    }

    $curupira = 2;
    $floresta = verificar_status($curupira);
     echo $floresta."<br>";

     echo"<hr>";

    $retete_de_jeova = 3;
    $cavalo_de_fogo = verificar_status($retete_de_jeova);
    echo $cavalo_de_fogo."<br>";
    
    echo "<hr>";
    $boi_tata = 4;
    $mulher_do_corno = verificar_status($boi_tata);
    echo $mulher_do_corno. "<br>";

    echo "<hr>";

        $navio_aguenta = 2;

        $carregados = carregamento_navio($navio_aguenta);
        echo  "Foram carregados $navio_aguenta $carregados. <br>";

        //função para contar quantos conteiners faltam
        //$numero_conteiner pode ser usado como: $navio_aguenta ou outro nome de variavel.
        function carregamento_navio($numero_conteiner){
            echo "Acessou a função <br>";
            echo "Parametro: $numero_conteiner <br><br>";
            
            $total_navio_aguenta = 10;
            
            $falta_conteiner = $total_navio_aguenta - $numero_conteiner;

            if($total_navio_aguenta == $numero_conteiner){
                $msg = " Carregamento concluído.";
               
            }else{                
                
                $msg = "Faltam $falta_conteiner";
                
            }
              return $msg;
        
        }

        $aguenta_navio =4;
        $cheio_carregado = carregamento_navio($aguenta_navio);
        echo "Foram carregados $aguenta_navio $cheio_carregado";
 
        $n = 4;
        $bloco_navio = carregamento_navio($n);
        echo "Foram carregados $bloco_navio";
        
?>
</body>
</html>