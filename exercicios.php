<?php

/*Somar e imprimir na tela no formato do Real */
$comissao = 2320.29;
$salario = 7600.25;

$somatoria = $comissao + $salario;
echo "Soma de tudo será: R$ " .number_format($somatoria,2,",","."). "<br><br>";

echo "<hr>";

/* */
$comissao_dois = 1321.45;
$salario_dois = 7600.25;

$somatoria_dois = $comissao_dois + $salario_dois;
echo "Somatoria da comissão R$ " .number_format($comissao_dois,2,",",".") . " mais salário R$ ". number_format($salario_dois,2,",",".") ." é R$ ". number_format($somatoria_dois,2,",",".")."<br><br>";

//INSS E IRRF A SEREM SUBTRAIDOS
$inss = 608.45;
$irrf = 1364.65;
echo "Valores de Inss e IRRF a serem subtraidos: Valor do Inss R$ " .number_format($inss, 2,",",".")  . " IRRF R$ ". number_format($irrf, 2,",",".")."<br><br>";

$somatoria_inss_irrf = $inss + $irrf;
echo "Valor total a ser subtraido do salário R$ ". number_format($somatoria_inss_irrf, 2,",",".")."<br><br>";

$subtracao_final =  $somatoria_dois - $somatoria_inss_irrf;
echo " Valor total do salario em conta R$ " . number_format($subtracao_final, 2,",",".");

echo "<hr>";

//Divisao

$compra = 1220.44;
$parcelas = 4;

$compra_parcelada = $compra / $parcelas;
echo "Valor das parcelas R$ " .$compra_parcelada;

echo"<hr>";

//Multiplicação de unidades e valor
$unidades = 58;
$valor_produto_a = 280.74;

$valor_produto_junho = $unidades * $valor_produto_a;

echo "Valor total do mes de Junho R$ ". number_format($valor_produto_junho, 2,",",".");

//Operadores de atribuição
echo"<hr>";
$comissao_tres = 1321.45;
$salario_tres = 7600.25;

$comissao_tres += $salario_tres;
echo "Valor somados R$ " .number_format($comissao_tres, 2, ",",".")."<br><br>"; 

$inss_dois = 608.45;
$irrf_dois = 1364.65;

$irrf_dois -= $inss_dois;

echo "Valor somados R$ " .number_format($irrf_dois, 2, ",",".")."<br><br>";

$compra_dois = 1220.44;
$parcelas_dois = 4;

$compra_dois /= $parcelas_dois;
echo "Valor das parcelas R$ " .number_format($compra_dois, 2, ",",".")."<br><br>";

$unidades_dois = 58;
$valor_produto_tres = 280.74;

$unidades_dois *= $valor_produto_tres;

echo "Valor total do mes de Junho R$ ". number_format($unidades_dois, 2,",",".");

//exercicios operadores de incremeto e decremento
echo "<hr> <h2>Operadores de Incremento e Decremento</h2></hr> ";

$produto_a = 115;
echo "Quantidade do produto A: ".--$produto_a."<br>";
echo "Quantidade do produto A: ".$produto_a."<br>";

$veiculos = 1529;
echo "Veiculos ate o momento: ".$veiculos++."<br>";
echo "Veiculos que passram: ".$veiculos."<br>";

//operadores de comparação
echo"<hr><h2>Operadores de comparação</h2>";
$contenier = 10;
$foram_carregados = 10;

if($contenier == $foram_carregados){
    echo "Já foram carregados : $contenier Contênier(Carregammento concluído)<br><br>";
}else{
    echo "Não foram carregados os $contenier Contênier <br><br>";
}

//Obter bolsa para aluno

$aluno = 10;
$bolsa_media = 8.5;

if($aluno >= $bolsa_media){
    echo "Aluno apto a bolsa, sua media é: $aluno <br><br>";
}else{
    echo "Aluno não atingiu a media  $bolsa_media para a bolsa, sua média foi: $aluno.";
}

//Atleta e categoria
$peso = 80;
$categoria_novato = 60;
$categoria_profissional = 80;

if($peso <= $categoria_novato){
    echo "Atleta está na categoria Novato $peso.";
}else{
    echo "Atleta na categoria Profissional $peso.";
}


//Operadores Lógico
echo "<hr>";
$peso_novato_um = 50;
$peso_novato_dois = 60;

$altura_novato_um = 1.70;

$peso_profissional_um = 60;
$peso_profissional_dois = 80;

$altura_profissional_um = 1.70;
$altura_profissional_dois = 1.90;

if(($peso_novato_um >= 60 ) AND ( $peso_novato_dois == 70 ) AND ($altura_novato_um <= 1.50)){
    echo "Atleta está na cateforia: Novato";
}else {
   echo "Atleta está no profissional";
}


?>

