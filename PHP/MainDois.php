<?php
    require_once ('Pessoa.php');
    require_once ("Conta/Cliente.php");
    require_once("Funcionario.php");
    require_once("Conta/Conta.php");
    require_once("Endereco.php");

    use PHP\Modelo\Cliente;
    use PHP\Modelo\Conta;

        $enderecVini = new Endereco("Travessa jamunda",
        "286","Centro", "Santo Andre", "São Paulo", "SP", "Brasil", "09030060");

    $clientVini = new Cliente("12345678910", "Vini", "11972844510", $enderec, 20);

    $contaVini = new Conta($clientVini, 300);

        echo $contaVini->getSaldo();
        echo $contaVini->depositar();
        echo $contaVini->getSaldo();

        echo "<br><br> Taxa da Conta R$" .$clientAllan->getTaxa();
        echo $clientAllan->setTaxa(100);
        echo "<br><br> Taxa da Conta R$" .$clientAllan->getTaxa();



?>