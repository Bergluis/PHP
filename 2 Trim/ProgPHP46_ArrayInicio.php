<?php
    /*Formas de criar arrays*/
    /*1*/
    $itens1=array(5, "Turma", true);
    print_r ($itens1);
    echo "<br>";
    /*2*/
    $itens2=array(0 => 6, 1 => "de sexta", 2 => false);
    print_r ($itens2);
    echo "<br>";
    /*3*/
    $itens3[]=7;
    $itens3[]="Preste atenção!";
    $itens3[]=true;
    print_r ($itens3);
    echo "<br>";
    /*4*/
    $itens4[0]=14;
    $itens4[1]="Em duas semanas";
    $itens4[2]=true;
    print_r($itens4);
    echo "<br>";
    /*5*/
    $itens5=[20, "teremos", true];
    print_r($itens5);
    echo "<br>";
    /*6*/
    $itens6=[0 => 40, 1 => "provas", 2=> true];
    print_r($itens6);
    echo "<br>";
?>