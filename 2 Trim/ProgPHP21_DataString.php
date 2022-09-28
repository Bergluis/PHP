<!--Prog 21_DataString
    07/07/2017
    Luís Fernando Bergamaschi
    Operações com datas e strings com formatação -->
<?php
    echo "Datas e Strings<br>";
    echo "Parte 1:<br>";
    $data = date('d-m-y');//coleta a data para a variável
    echo "Data: ", $data, "<br>";
//escreva até aqui e testa
    echo "*******************<br>";
    echo "Parte 2:<br>";
    $mai = mktime (8,0,0,5,22,2017);//define data
    $mai_30 = mktime (8,0,0,5,23,2017);
    $dif = $mai_30 - $mai;//diferença de datas
    echo $dif/(24*60*60), "<br>";//simplificação para dias
    echo date ("d-m-y h:i:s a", $mai_30), "<br>";//modos de impressão de datas
    echo date ("D w W F d-m-y h:i a", $mai), "<br>";
    echo "Pesquisar e testar para que servem os comandos em date (observar que se diferenciam minúsculas de maiúsculas): j, N, z, M, n, t, Y, A, g, H , u, r <br>";
    echo date ("r");
//escreva até aqui e testa
    echo "<br>*******************<br>";
    echo "Parte 3:<br>";
    $msg = "Bom dia turma";
    echo lcfirst($msg), "<br>";//minusculo
    echo ucfirst($msg), "<br>";//primeira maiuscula
    echo ucwords($msg), "<br>";//primeira de cada palavra maiuscula
    echo strtolower($msg), "<br>";//tudo minuscula
    echo strtoupper($msg), "<br>";//tudo maiuscula
//escreva até aqui e testa
    echo "*******************<br>";
    echo "Parte 4:<br>";
    $vazio = "  Espaços    vazios  ";
    echo ltrim($vazio), "<br>";
    echo rtrim($vazio), "<br>";     //tira espaços a mais
    echo trim($vazio), "<br>";
//escreva até aqui e testa
    echo "*******************<br>";
    echo "Parte 5:<br>";
    $busca = "nome";
    $troca = "alunos 3° ano!";
    $frase = "E aí, nome!";
    $msg2 = str_replace($busca , $troca, $frase);//junção de mensagem
    echo $msg2, "<br>";
//escreva até aqui e testa
    echo "*******************<br>";
    echo "Parte 6:<br>";
    $msg3 = "Bom dia, como foi final de semana?";
    echo strlen($msg3), "<br>";//contadores de caracteres
    echo substr_count($msg3, "semana"), "<br>";
//escreva até aqui e testa
    echo "*******************<br>";
    echo "Parte 7:<br>";
?>