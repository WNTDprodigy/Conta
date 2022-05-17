<?php

class ContaCorrente{

    private $nome;

    private $cpf;

    private $dataNascimento;

    private $saque;

    private $deposito50;

    private $juros;

    public $saldo;

    
 
public function getNome()
{
    return $this->nome;
}

public function setNome($nome)
{
    $this->nome = $nome;

    return $this;
}

public function getCpf()
{
    return $this->cpf;
}

public function setCpf($cpf)
{
    $this->cpf = $cpf;

    return $this;
}

public function getDataNascimento()
{
    return $this->dataNascimento;
}

public function setDataNascimento($dataNascimento)
{
    $this->dataNascimento = $dataNascimento;

    return $this;
}

public function getSaque()
{
    return $this->saque;
}

public function setSaque($saque)
{
    $this->saque = $saque;

    return $this;
}

public function getDeposito()
{
    return $this->deposito;
}

public function setDeposito($deposito)
{
    $this->deposito = $deposito;

    return $this;
}

public function getJuros()
{
    return $this->juros;
}

public function setJuros($juros)
{
    $this->juros = $juros;

    return $this;
}
public function getSaldo()
{
    return $this->saldo;
}

public function setSaldo($saldo)
{
    $this->saldo = $saldo;

    return $this;
    
    
    
}
public function Deposito50($deposito50){

      return $this->$saldo + 50;

}
}


?>