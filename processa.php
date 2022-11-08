<?php
$nome_cliente= filter_input(INPUT_GET, "nome_cliente", FILTER_SANITIZE_STRING);
$email_cliente = filter_input(INPUT_GET,"email_cliente", FILTER_SANITIZE_STRING);
$senha_cliente = filter_input(INPUT_GET,"senha_cliente",FILTER_SANITIZE_STRING);

echo "Recebe nome do cliente: $nome_cliente <br><br>";
echo "Recebe E-mail do cliente: $email_cliente <br><br>";
echo "Recebe senha do cliente: $senha_cliente<br><br>";