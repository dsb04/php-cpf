<?php
include('calculadora.php');
include('funcionarios.php');

$id =$_POST{'cpf'}
$calculaadora = new calculadora();
$funcionarios = new funcionarios();
$func = $Funcionarioss->find('$cpf');
$novoSalario = $calculadora->mult(
    $func['salario'],
    1.1
)
echo $func['nome'];
echo 'Salario anterior: R$ ' . $func ['salario'] .</br>
echo 'Novo salario: R$ ' . $novoSalario;
?>