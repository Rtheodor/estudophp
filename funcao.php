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

        $navio_aguenta = 2;,,

        $carregados = carregamento_navio($navio_aguenta);
        echo  "Foram carregados $navio_aguenta $carregados. <br>";
        
        //função para contar quantos conteiners faltam
        //$numero_conteiner pode ser usado como: $navio_aguenta ou outro nome de variavel.
        //Antes disso me fodi dois dias penando se usava if, switch ou four. (foreach não sei usar é foda-se uma hora aprendo.); usei o ";" olha, pqp que ridiculo isso.
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

        // INICIO DA 5° SERIE
        // $sofia_carrega_ou_aguenta é uma variavel kkkk  se a sefia aguenta o resto f*&$-#$
        $sofia_carrega_ou_aguenta = 4;

        $picoka = carregamento_navio($sofia_carrega_ou_aguenta);
        echo "Fatlam quantas rolas na sofia $picoka";

        //usei com aspas DUPLAS, bora codar.

        //README leia CHAMPS. porque não usei /* */?

        //Inico: Passagem de parâmetro por valor e referência

        echo "<hr><h4>Passagem por valor</h4>";

        function salario($num){
            //otimizando condigo: $num = $num+5; otimizando ficara: $num+=5;
            $num +=50;
            echo "Dentro da função - salário com aumento: $num<br>";
            
        }

            $salario = 8200;
            salario($salario);

            echo "Salário sem aumento: $salario<br>";

        
        echo "<hr>";


        function salario_x($num){
            $num+=100;
            echo "Dentro da função - slário com aumento: $num<br>";

            return $num;
        }

        $salario = 8500.47;
        $salario_com_aumento = salario_x($salario);
        echo "Fora da função, imprimindo o retorno - Salário com aumento: $salario_com_aumento<br>";


        echo "<hr> <h4>Passagem por referência</h4>";

        function salario_y(&$num){
            $num+=200;
            echo "Dentro da função - salário com aumento: $num <br>";
        }

        $salario_apenas_uma_variavel = 9300;
        salario_y($salario_apenas_uma_variavel);

        echo "Salário com aumento: $salario_apenas_uma_variavel<br>";
       
        //Inicio dos exercicios


        function producao(& $soma_final){
            $custo_producao =2000;
            $porcentagem_produto = 70;
            $resultado_porcentagem_producao = $custo_producao * ($porcentagem_produto/100);
            $soma_final = $resultado_porcentagem_producao + $custo_producao;
            echo "Custo final do produto: ". number_format( $soma_final, 2,",",".")."<br>";
            return  $soma_final;
        }
       echo "<br>";
        $produto_final = 2000;
        echo "Valor do produto final: $produto_final<br>";
        producao($produto_final);
        echo "Produto final valor de: ".number_format($produto_final, 2,",",".")."<br>" ;

        echo "<hr>";

        //Fazenda A necessita calcular o gasto de agua em cada safra
        /*calculando m3 - 1 Hectares Metros (1 x 10000 = 10.000 Metros cúbicos)
        hectares Metros 1287 x 10000 m3 = 12.870.000 m3 */
        echo "<br> <h1>Fazenda calcular </h1>";
        
        $hectar_vale = 10.000;
        $hectares = 1287;
        $hectares_m3 = 12870000;
        $safra_ano = 3;
        $agua_gasta_hectare = 5267;
        $custo_metro_cada = 0.17;
        $qtd_anos = 5;


        //Calcula o gasto de água para todo os hectares em M3
        $agua_gasto_cada_safra = $agua_gasta_hectare * $hectares;
        echo "Calcula o gasto de água para todo os hectares em M3 é de: ".number_format($agua_gasto_cada_safra,2,",",".")." Metros cúbicos<br><br>";
        
        echo"<hr>";

        //Calcular gasto de água em cada safra em M3
        $valor_m3_agua = $hectar_vale * $agua_gasta_hectare;
        echo " Calcular gasto de água em cada safra em M3: ". number_format($valor_m3_agua,2,",",".")." Metros cúbicos<br><br>";

      
        echo"<hr><h2>O tatal de M3(metros cúbicos) gastos de água no ano</h2>";
        //Total de M3 gasto de agua no ano (TT =TOTAL) 
        $tt_gasto_agua_safra_ano = $agua_gasto_cada_safra * $safra_ano;

       echo "O total de M3 gasto de água no ano é de : ".number_format($tt_gasto_agua_safra_ano,2,",",".")." <br><br>";

        //Custo em reais de cada safra
        echo "<br>";
        $custo_m3_reais = $hectares_m3 * $custo_metro_cada;
        echo "O custo em reais de cada safra é de:  R$".number_format($custo_m3_reais,2,",",".")." <br><br>";

        //Custo total do ano 
        echo "<br>";
        $tt_custo_ano = $custo_m3_reais * $safra_ano;

        echo "Custo total do ano é de : R$".number_format($tt_custo_ano,2,",",".")." <br><br>";
        
        //custo ao longo de 5 anos
        $somatoria_anos = $tt_custo_ano * $qtd_anos;

        echo "Custo total ao longo de 5 anos é de: R$".number_format($somatoria_anos,2,",",".")." <br><br>";
        
?>
</body>
</html>