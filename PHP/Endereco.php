<?php
    //longradouro, numero, complemento, bairro, cidade, estado, pais, cep, uf

    class endereco{
        public string $numero;
        public string $longradouro;
        public string $complemento;
        public string $bairro;
        public string $cidade;
        public string $estado;
        public string $pais;
        public string $cep;
        public string $uf;

        public function_construct(public string $numero, public string $longradouro, public string $complemento, public string $bairro, public string $cidade,
        public string $estado, public string $pais, public string $cep, public string $uf)

    


    public function getnumero() : string {
        return $this->numero;
    }

    public function getlongradouro() : string {
        return $this->longradouro;
    }

    public function getcomplemento() : string {
        return $this->complemento;
    }

    public function getbairro() : string {
        return $this->bairro;
    }

    public function getcidade() : string {
        return $this->cidade;
    }

    public function getestado() : string {
        return $this->estado;
    }

    public function getpais() : string {
        return $this->pais;
    }

    public function getcep() : string {
        return $this->cep;
    }

    public function getuf() : string {
        return $this->uf;
    }

    public function setnumero(string $numero) : void{
         $this->numero = $numero;
    }
    
    public function setlongradouro(string $numero) : void{
        $this->longradouro = $longradouro;
   }

   public function setcomplemento(string $complemento) : void{
    $this->complemento = $complemento;
    }   

    public function setbairro(string $bairro) : void{
        $this->bairro = $bairro;
   }

   public function setcidade(string $cidade) : void{
    $this->cidade = $cidade;
    }

    public function setestado(string $estado) : void{
        $this->estado = $estado;
   }

   public function setpais(string $pais) : void{
        $this->pais = $pais;
   }


   public function setcep(string $cep) : void{
        $this->cep = $cep;
   }

   public function setuf(string $uf) : void{
    $this->uf = $uf;
    }

}
   //longradouro, numero, complemento, bairro, cidade, estado, pais, cep, uf
?>