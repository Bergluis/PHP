<?php
    function somaComRetorno($a, $b): int{
        $resultado = $a + $b;
        return $resultado;
    }

    function somaSemRetorno($a, $b){
        $resultado = $a + $b;
        echo "<br>",$resultado;
    }

    function retornaMaior($a, $b): int{
        if($a > $b){
            return $a;
        } else if($b > $a){
            return $b;
        }
    }

    function situacaoAluno($a, $b, $c): String{
        $resultado = ($a + $b+ $c)/3;
        if($resultado >= 6){
            $situacao = "Aprovado";
        } else {
            $situacao = "Reprovado";
        }
        return $situacao;
    }

    function mediaAluno($a, $b, $c): float{
        $resultado = ($a + $b+ $c)/3;
        return $resultado;
    }

    function areaTriangulo($a, $b): float{
        $resultado = ($a * $b)/2;
        return $resultado;
    }


    echo "-----Exe 1-----<br>"; 
    
    $retorno1 = somaComRetorno(10,5);
    echo "<br>",$retorno1;
    somaSemRetorno(3,5);

    echo "<br>-----Exe 2-----<br>";

    $retorno2 = retornaMaior(10,5);
    echo "<br>O maior número é: ", $retorno2;

    echo "<br>-----Exe 3-----<br>";

    $retorno3 = situacaoAluno(10,6,2);
    echo "<br>",$retorno3;

    echo "<br>-----Exe 4-----<br>";

    $retorno4 = mediaAluno(10,6,2);
    echo "<br>Média: ",$retorno4;

    echo "<br>-----Exe 5-----<br>";

    $retorno5 = areaTriangulo(2,2);
    echo "<br>Área do triângulo: ",$retorno5;
?>