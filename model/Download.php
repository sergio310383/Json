<?php

namespace model;

class Download {

    private $id;
    private $nome;
    private $tipo;
    private $link;
    public $result;

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getLink() {
        return $this->link;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setLink($link) {
        $this->link = $link;
    }
    
    function getResult() {
        return $this->id;
    }
    
    function setResult($result) {
        $this->result = $result;
    }

}
