<?php

    namespace PHP\Modelo\Conta;

    require_once("Endereco.php");   

    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Endereco;

    class Cliente extends Pessoa{
    private float $taxa;

    public function__construct(
        string $cpf,
        string $nome;
        string $telefone,
        Endereco $endereco,
        float $taxa
        )
    {
    parent::__construct($cpf, $nome, $telefone, $endereco);
    $this->taxa = $taxa;
    }
    
    public function getTaxa(): float {
    
        return $this->taxa;
    }

    public function setTaxa(float $taxa): void {
    
        $this->taxa = $taxa;
    }


}
?>