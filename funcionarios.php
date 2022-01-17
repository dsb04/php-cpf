<?php

class Funcionarios
{
    private $funcionarios;

    public function __construct()
    {
        $this->funcionarios = [
            ['cpf' => 333333333, 'nome' => 'João', 'salario' => 1500],
            ['cpf' => 666666666, 'nome' => 'José', 'salario' => 1200],
            ['cpf' => 999999999, 'nome' => 'Maria', 'salario' => 1600]
        ];
    }

    public function all()
    {
        return $this->funcionarios;
    }

    /**
     * Busca um funcionário pelo cpf
     * 
     * @param int $cpf
     * 
     * @return array|null
     */
    public function find($cpf)
    {
        foreach ($this->funcionarios as $func) {
            if ($func['cpf'] == $cpf) {
                return $func;
            }
        }
    
        return null;
    }
}

?>