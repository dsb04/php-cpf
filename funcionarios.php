<?php

class Funcionarios
{
    private $funcionarios;

    public function __construct()
    {
        $this->funcionarios= [
            $funcionarios = [
                ['cpf' => 333333333, 'nome' => 'joao', 'salario'=> 1000],
                ['cpf' => 666666666, 'nome' => 'maria', 'salario'=> 1100],
                ['cpf' => 999999999, 'nome' => 'bernabe', 'salario'=> 1500]
            ];
        ]
    }
    public function all()
    {
        return $this->funcionarios;
    }
    public function find($cpf)
    {
    foreach ($this->funcionarios as $f) {
        if ($f['cpf'] == $cpf) {
            return $f;
        };
    };

    return null;
};
}




?>