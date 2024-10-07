<?php


class ContaBanco {
    //Atributos
    public  $numConta;
    protected $tipoConta;
    private $saldo;
    private $status;
    private $dono;


    public function abrirConta($t) {
        $this->setTipoConta($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP"){
            $this->saldo = 150;
        }
    }


    /**
     * Description: Banco
     * @Author: Railton
     */

    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta aida tem dinheiro, não posso fechá-lá!</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta está em debito. Impossivel encerrar!</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de ". $this->getDono() . "fechada com Sucesso</p>";
        }
    }

   public function depositar($v) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Deposito de R$$v ma Conta de ". $this->getDono() . "</p>";
        } else {
            echo "<p>Conta fechada. Não consigo Depositar!</p>";
        }
    }

    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$$v autorizado na Conta de ". $this->getDono(). "</p>";
            } else {
                echo "<p>Saldo insuficiente. Para saque.</p>";
            }
        } else {
            echo "<p>Não Posso sacar de uma conta Fechada</p>";
        }
    }

    public function pagarMensalidade() {
        if ($this->getTipoConta() == "CC") {
            $v = 12;
        } elseif ($this->getTipoConta() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$$v debitada na Conta de ". $this->getDono(). "</p>";
        } else {
            echo "<p>Problemas com a conta. Não posso cobrar.</p>";
        }
    }

    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com Sucesso!</p>";
    }


    public function getNumConta()
    {
        return $this->numConta;
    }


    public function setNumConta($numConta): void
    {
        $this->numConta = $numConta;
    }


    public function getTipoConta()
    {
        return $this->tipoConta;
    }


    public function setTipoConta($tipoConta): void
    {
        $this->tipoConta = $tipoConta;
    }


    public function getSaldo()
    {
        return $this->saldo;
    }


    public function setSaldo($saldo): void
    {
        $this->saldo = $saldo;
    }


    public function getStatus()
    {
        return $this->status;
    }


    public function setStatus($status): void
    {
        $this->status = $status;
    }


    public function getDono()
    {
        return $this->dono;
    }


    public function setDono($dono): void
    {
        $this->dono = $dono;
    }




}