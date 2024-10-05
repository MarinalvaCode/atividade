<?php
abstract class Bebida {
    abstract public function mostrarBebida();
    abstract public function verificarPreco($preco);
}

class Vinho extends Bebida {
    private $nome;
    private $tipo;
    private $ano;
    private $preco;

    public function __construct($nome, $tipo, $ano, $preco) {
        $this->setNome($nome);
        $this->setTipo($tipo);
        $this->setAno($ano);
        $this->setPreco($preco);
    }

    public function mostrarBebida() {
        return "Vinho: {$this->nome}, Tipo: {$this->tipo}, Ano: {$this->ano}, Preço: R$" . number_format($this->preco, 2, ',', '.');
    }

    public function verificarPreco($preco) {
        return $this->getPreco() < 25;
    }

    // Getters e Setters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }
}

class Refrigerante extends Bebida {
    private $nome;
    private $sabor;
    private $preco;

    public function __construct($nome, $sabor, $preco) {
        $this->setNome($nome);
        $this->setSabor($sabor);
        $this->setPreco($preco);
    }

    public function mostrarBebida() {
        return "Refrigerante: {$this->nome}, Sabor: {$this->sabor}, Preço: R$" . number_format($this->preco, 2, ',', '.');
    }

    public function verificarPreco($preco) {
        return $this->getPreco() < 5;
    }

    // Getters e Setters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSabor() {
        return $this->sabor;
    }

    public function setSabor($sabor) {
        $this->sabor = $sabor;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }
}

class Suco extends Bebida {
    private $nome;
    private $fruta;
    private $preco;

    public function __construct($nome, $fruta, $preco) {
        $this->setNome($nome);
        $this->setFruta($fruta);
        $this->setPreco($preco);
    }

    public function mostrarBebida() {
        return "Suco: {$this->nome}, Fruta: {$this->fruta}, Preço: R$" . number_format($this->preco, 2, ',', '.');
    }

    public function verificarPreco($preco) {
        return $this->getPreco() < 2.5;
    }

    // Getters e Setters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getFruta() {
        return $this->fruta;
    }

    public function setFruta($fruta) {
        $this->fruta = $fruta;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }
}
?>